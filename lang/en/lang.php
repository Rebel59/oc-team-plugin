<?php
return [
    'plugin' => [
        'name' => 'Team',
        'description' => 'List your team members.'
    ],
    'models' => [
        'member' => [
            'name' => 'Name',
            'function' => 'Function',
            'published' => 'Show Member on Front-End',
            'published_at' => 'Published Date',
            'description' => 'Description',
            'cover' => 'Cover Image',
            'photo' => 'Profile Image',
            'socials' => 'Socials',
            'social' => [
                'icon' => 'Social Icon (FontAwesome 5)',
                'url' => 'Social URL'
            ]
        ]
    ],
    'components' => [
        'team_members' => [
            'name' => 'Team Members',
            'description' => 'Lists Team Members on the Front-end',
            'load_assets' => [
                'label' => 'Load CSS Assets',
                'description' => 'Load the bundled CSS File. This does not load Bootstrap files.',
            ]
        ]
    ]
];

