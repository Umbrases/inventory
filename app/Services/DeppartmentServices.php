<?php

namespace App\Services;

use App\Models\Department;
use App\Models\QueryHelper;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DeppartmentServices
{
    private QueryHelper $queryHelper;

    public function __construct()
    {
        $this->queryHelper = new QueryHelper;
    }

    public function updateUserAll()
    {
//        $users = UserServices::class->
//        foreach ($users['result'] as $key => $user)
//        {
//
//            $department = match ($user['UF_DEPARTMENT']) {
//                '626' => 1, //Отдел IT
//                '7' => 2, // юридический отдел
//                '9' => 3, //Отдел маркетинга и рекламы
//                '5' => 4, //Отдел продаж и сопровождения
//                '714' => 5, //Отдел продаж
//                '712' => 6, //Отдел сопровождения
//                '116' => 7, //Колл центр
//                '282' => 8, //Аппарат АУ
//                '284' => 9, //Арбитражные управляющие
//                '296' => 10, //Арбитражный управляющий 1
//                '298' => 11, //Арбитражный управляющий 2
//                '300' => 12, // Арбитражный управляющий 3
//                '286' => 13, //Отдел делопроизводства
//                '294' => 14, //Отдел по завершению
//                '292' => 15, //Отдел по торгам/имуществу
//                '288' => 16, //Отдел работы с кредиторами
//                '290' => 17, //Финансовый отдел
//                '206' => 18, //Бухгалтерия
//                '432' => 19, //Военный билет
//                '222' => 20, //Недвижимость
//                '162' => 21, //Партнерская сеть
//            };
//            User::updateOrCreate([
//                'user_id' => $user['ID'],
//                'name' => $user['NAME'],
//                'email' => $user['EMAIL'],
//                'department_id' => $department,
//            ]);
//        }
    }

}
