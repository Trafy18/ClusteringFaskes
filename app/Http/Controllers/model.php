<?php

class KMeans
{

    protected $k;
    protected $data;

    public function __construct(array $data, int $k)
    {
        $this->k = $k;
        $this->data = $data;
    }

    /**
     * Memproses pengelompokan (clustering)
     *
     * @param  callable $callback
     *
     * @return array
     */
    public function process(callable $callback = null): array
    {
        $k = $this->k;
        $data = $this->data;

        return $this->getClusters($k, $data, $callback);
    }

    /**
     * Mengelompokkan data menjadi $k clusters
     *
     * @param  int $k
     * @param  array $data
     * @param  callable $callback untuk callback di setiap iterasi
     *
     * @return array
     */
    public function getClusters(int $k, array $data, callable $callback = null): array
    {
        $iterations = 0;
        $histories = [];

        // 1. Cari tahu centroids awal
        $centroids = $this->getInitialCentroids($k, $data);

        do {
            $prev_history = count($histories) ? $histories[count($histories) - 1] : null;
            $prev_clusters = $prev_history ? $prev_history['clusters'] : null;

            // 2. Tentukan cluster setiap point
            $clusters = array_fill(0, count($centroids), []);
            foreach ($data as $i => $point) {
                // 2.a. Hitung jarak point ke k centroids
                $distances = array_map(function($c) use ($point) {
                    return $this->getEuclidianDistance($point, $c);
                }, $centroids);

                // 2.b. Ambil index jarak terpendek
                $shortest_index = $this->getShortestIndex($distances);

                // 2.c. Masukkan point kedalam kelompok terpendek
                $clusters[$shortest_index][] = $i;
            }

            // 3. Update centroids
            $centroids = $this->updateCentroids($clusters, $data);

            $iterations++;

            $histories[] = [
                'centroids' => $centroids,
                'clusters' => $clusters,
            ];

            if (is_callable($callback)) {
                $callback($centroids, $clusters, $iterations, $histories);
            }

            // 4. Ulangi step 2 dan 3, selama anggota cluster berubah
        } while(!$prev_clusters || $this->hasChanges($clusters, $prev_clusters));

        return $clusters;
    }

    /**
     * Mencari tahu initial centroids menggunakan algoritma k-means++
     *
     * @param  int $count jumlah cluster
     * @param  array $data
     *
     * @return array
     */
    private function getInitialCentroids(int $count, array $data): array
    {
        $data = array_values($data);
        $centroids = [];
        $centroids_indexes = [];

        $c1_index = array_rand($data);
        $centroids_indexes = [$c1_index];
        $centroids[] = $data[$c1_index];

        for ($k = 1; $k < $count; $k++) {
            $square_distances = [];
            $used_index = -1;

            foreach ($data as $i => $d) {
                if (in_array($i, $centroids_indexes)) continue;

                $distances = array_map(function($centroid) use ($d) {
                    return $this->getEuclidianDistance($d, $centroid);
                }, $centroids);

                $shortest_index = $this->getShortestIndex($distances);
                $square_distances[] = pow($distances[$shortest_index], 2);
            }

            $sum_square_distances = array_sum($square_distances);
            $random = rand(1, 1000) / 1000;
            $probability = 0;
            $data_index = 0;
            $iterations = 0;

            do {
                $probability += $square_distances[$data_index] / $sum_square_distances;

                if ($probability >= $random && !in_array($data_index, $centroids_indexes)) {
                    $used_index = $data_index;
                    $centroids_indexes[] = $used_index;
                    break;
                }

                $data_index += 1;
                if ($data_index >= count($square_distances) - 1) {
                    $data_index = 0;
                }

                $iterations++; // sementara belum batasin iterasi
            } while ($used_index < 0);

            $centroids[$k] = $data[$used_index];
        }

        return $centroids;
    }

    /**
     * Mengubah centroids berdasarkan rata-rata
     * dari koordinat anggota di masing-masing cluster
     *
     * @param  array $clusters
     * @param  array $data
     *
     * @return array
     */
    private function updateCentroids(array $clusters, array &$data): array
    {
        return array_map(function($points, $i) use ($data) {
            $first_index = count($points) ? $points[0] : null;
            $first_point = $data[$first_index];

            $sums = array_fill(0, count($first_point), 0);
            foreach ($points as $point_index) {
                $point = $data[$point_index];
                foreach ($point as $j => $coor) {
                    $sums[$j] += $coor;
                }
            }

            $points_count = count($points);
            return array_map(function($sum) use ($points_count) {
                return $sum / $points_count;
            }, $sums);
        }, $clusters, array_keys($clusters));
    }

    /**
     * Mengecek apakah $cluster_a dan $cluster_b berbeda (berubah)
     *
     * @param  array $clusters_a
     * @param  array $clusters_b
     *
     * @return bool
     */
    private function hasChanges(array $clusters_a, array $clusters_b): bool
    {
        foreach ($clusters_a as $i => $a) {
            $b = $clusters_b[$i];

            if (array_diff($a, $b)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Mengambil jarak menggunakan euclidian distance
     * antara koordinat $a dan koordinat $b pada n dimensi
     *
     * @param  array $a
     * @param  array $b
     *
     * @return float
     */
    private function getEuclidianDistance(array $a, array $b): float
    {
        $total = 0;
        foreach ($a as $i => $ai) {
            $bi = isset($b[$i]) ? $b[$i] : 0;
            $total += pow($bi - $ai, 2);
        }
        return sqrt($total);
    }

    /**
     * Mengambil index dengan jarak terpendek dari $distances
     *
     * @param  array $distances
     *
     * @return int
     */
    private function getShortestIndex(array $distances): int
    {
        asort($distances);
        return array_keys($distances)[0];
    }

}