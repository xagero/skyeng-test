<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 15:00
 */

/**
 * Файл данных упражнений
 */
return [

    /**
     * Это пример структуры данных по заданиям
     */

    [
        // Тип задания для ученика (выбрать из многих правильные)
        'type' => 'multiple-answer',
        'data' => [
            'quest' => 'Quest', // Постановка задачи
            'correct' => [1,3], // Корректные ответы
            'answer' => [

                1 => [
                    'title' =>'Answer 1',
                    'extra-attr-1' => '' // любые экстра атрибуты которые определяют логику работы и тд
                ],

                2 => [
                    'title' => 'Answer 2'
                ],

                3 => [
                    'title' => 'Answer 3',

                    // Для этого ответа свои баллы
                    'custom-score' => [
                        'success' => 10,
                        'failure' => -7
                    ]
                ]
            ],
        ],
    ],

    // Тип задания - выбрать 1 правильный
    [
        'type' => 'single-answer',
        'data' => [
            'quest' => 'Quest',
            'correct' => 2,
            'answer' => [

                1 => [
                    'title' => 'Answer 1'
                ],

                2 => [
                    'title' => 'Answer 2'
                ],

                3 => [
                    'title' => 'Answer 3'
                ]
            ],

        ],
    ],

    // Тип задания - выбрать 1 правильный (вариант 2 - содержить свои баллы)
    [
        'type' => 'single-answer',
        'data' => [
            'quest' => 'Quest',
            'correct' => 3,
            'answer' => [

                1 => [
                    'title' => 'Answer 1'
                ],

                2 => [
                    'title' => 'Answer 2'
                ],

                3 => [
                    'title' => 'Answer 3'
                ],

                4 => [
                    'title' => 'Answer 3'
                ],

                5 => [
                    'title' => 'Answer 3'
                ],

                6 => [
                    'title' => 'Answer 3'
                ],

                7 => [
                    'title' => 'Answer 3'
                ],
            ],
            'custom-score' => [
                'success' => 5,
                'failure' => -10
            ]

        ],
    ],


    // Тип задания - предложить свой вариант ответа
    [
        'type' => 'custom-answer',
        'data' => [
            'quest' => 'Quest',
        ]
    ]
];
