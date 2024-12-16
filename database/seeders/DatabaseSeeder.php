<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $divisions = [
            '서비스개발본부',
            '기술개발연구소'
        ];
        $departments = [
            "서비스개발본부" => [
                "개발팀",
                "디자인실"
            ],
            "기술개발연구소" => [
                "기술개발연구소",
                "ThinQ"
            ]
        ];
        $teams = [
            "개발팀" => [
                "플랫폼서비스 개발팀",
                "모바일서비스 개발팀"
            ],
            "디자인실" => [
                "UX/UI 1",
                "UX/UI 2",
            ],
            "기술개발연구소" => [
                "선행 제어 Task",
                "시스템 통합 Task"
            ],
            "ThinQ" => [
                "사물인터넷 Task"
            ]
        ];

        $users = [
            "플랫폼서비스 개발팀" => [
                "정지원",
                "이종훈"
            ],
            "모바일서비스 개발팀" => [
                "장송하",
                "조봉희"
            ],
            "UX/UI 1" => [
                "정연경",
                "이윤지"
            ],
            "UX/UI 2" => [
                "신응수",
                "조은주"
            ],
            "선행 제어 Task" => [
                "장주환",
                "임채준"
            ],
            "시스템 통합 Task" => [
                "김제완",
                "조다혜"
            ],
            "사물인터넷 Task" => [
                "이재욱",
                "박정언"
            ]
        ];


        foreach($divisions as $division) {
            $divisionItem = Division::create([
                'title' => $division,
                'content' => $division
            ]);
            foreach($departments[$division] as $department) {
                $departmentItem = $divisionItem->departments()->create([
                    'title' => $department,
                    'content' => $department
                ]);
                foreach($teams[$department] as $team) {
                    $teamItem = $departmentItem->teams()->create([
                        'title' => $team,
                        'content' => $team
                    ]);

                    foreach($users[$team] as $user) {
                        $teamItem->uesrs()->create([
                            'name' => $user,
                            'email' => "$user@amuz.co.kr",
                            "password" => Hash::make("amuz1234"),
                        ]);
                    }
                }
            }
        }
    }
}
