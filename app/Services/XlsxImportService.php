<?php

namespace App\Services;

use App\Models\Band;
use Shuchkin\SimpleXLSX;

class XlsxImportService {

    public function insertInDb($file) {
        $data = $this->excelImport($file);
        print_r($data);
        foreach ($data as $bandData) {
            $band = new Band([
                'name'=> ($bandData['Nom du groupe']),
                'country_origin' => ($bandData['Origine']),
                'city_origin' => ($bandData['Ville']),
                'start_year' => ($bandData['Année début']),
                'end_year' => ($bandData['Année séparation']),
                'founders' => ($bandData['Fondateurs']),
                'members' => ($bandData['Membres']),
                'genre' => ($bandData['Courant musical']),
                'presentation' => ($bandData['Présentation']),
            ]);
            $band->save();
        }
    }

    private function excelImport($file) {
        $xlsx = new SimpleXLSX($file);
        if($xlsx->success()) {
            $columnNames = $rows = [];
            foreach ($xlsx->rows() as $columns => $rowCell) {
                if ($columns === 0) {
                    $columnNames = $rowCell;
                    continue;
                }
                $rows[] = array_combine($columnNames, $rowCell);
            }
            print_r($rows);
            return $rows;
        }
    }
}
