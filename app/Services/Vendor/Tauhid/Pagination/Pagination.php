<?php

namespace App\Services\Vendor\Tauhid\Pagination;

class Pagination
{
    public static function default($paginator)
    {
        $pageNumberRange = 7; // It has to be odd number.
        $currentPage = $paginator->currentPage();
        $lastPage = $paginator->lastPage();

        // checking extra number in part 1
        $part1Extra = 0;
        $isSetPart1From = 0;
        $part1From = $currentPage - ($pageNumberRange - 1);
        $part1To = $currentPage;
        for ($i = $part1From; $i < $currentPage; $i++) {
            if ($i > 0) {
                if ($isSetPart1From == 0) {
                    $part1From = $i;
                    $isSetPart1From = 1;
                }
            } else {
                $part1Extra++;
            }
        }

        // checking extra number in part 2
        $part2Extra = 0;
        $part2From = $currentPage + 1;
        $part2To = $currentPage + ($pageNumberRange);
        for ($i = $part2From; $i < $part2To; $i++) {
            if ($i > $lastPage) {
                $part2Extra++;
            }
        }

        // adding extra number
        if ($part1Extra > 0) {
            $part2From = $currentPage + 1;
            $part2To = $currentPage + $part1Extra + 1;
        }

        // adding extra number
        if ($part2Extra > 0) {
            $part1From = $currentPage - $part2Extra;
            $part1To = $currentPage;
            $part2To = $lastPage + 1;
        }

        // showing current page in middle
        if (($pageNumberRange - 1) / 2 > $part1Extra && ($pageNumberRange - 1) / 2 > $part2Extra) {
            $part1From = $currentPage - ($pageNumberRange - 1 ) / 2;
            $part2From = $currentPage + 1;
            $part2To = $currentPage + ($pageNumberRange - 1) / 2 + 1;
        }

        //triming negetive numbers
        if ($part1From < 1) {
            $part1From = 1;
        }
        
        return view('partials._pagination', [
            'paginator' => $paginator,
            'paginationLinks' => array('currentPage' => (int) $currentPage, 'lastPage' => (int) $lastPage, 'part1From' => (int) $part1From, 'part1To' => (int) $part1To, 'part2From' => (int) $part2From, 'part2To' => (int) $part2To),
        ]);
    }
}
