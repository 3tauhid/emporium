<?php

namespace App\Services;

use App\Models\Department;
use App\Models\ProductReview;
use App\Models\Product;
use App\Models\User;

class DepartmentHelper
{
    public static function getChildDepartmentIds($mainDepartmentId)
    {
        $childDepartmentIds = [$mainDepartmentId];

        $departments = Department::select('id', 'parent_department_id')->get();

        $departmentMaps = [];
        foreach ($departments as $department) {
            $departmentMaps[$department->parent_department_id][] = $department->id;
        }

        for ($i = 0; $i < count($childDepartmentIds); $i++) {
            $currentDeptId = $childDepartmentIds[$i];

            if (!empty($departmentMaps[$currentDeptId])) {
                foreach ($departmentMaps[$currentDeptId] as $childDepartmentId) {
                    // Prevent duplicates
                    if (!in_array($childDepartmentId, $childDepartmentIds, true)) {
                        $childDepartmentIds[] = $childDepartmentId;
                    }
                }
            }
        }

        return $childDepartmentIds;
    }

    public static function getParentDepartmentNames($departmentId)
    {
        $departments = Department::select('id', 'parent_department_id', 'name')->get()->keyBy('id');

        $departmentNames = [];
        $currentDepartmentId = $departmentId;

        while (isset($departments[$currentDepartmentId])) {
            $department = $departments[$currentDepartmentId];

            if ($department->parent_department_id != 0) {
                $departmentNames[] = $department->name;
                $currentDepartmentId = $department->parent_department_id;
            } else {
                $departmentNames[] = $department->name;
                break;
            }
        }

        return array_reverse($departmentNames);
    }
}
