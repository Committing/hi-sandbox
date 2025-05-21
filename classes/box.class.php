<?php






class box extends box_positions
{
    
    public $name = 'jack';

    public $center = [127.5, 127.5, 127.5];

    public $box_log = false;
    public $conscious_box_log = true;
    public $show_project_snakes = true;

    public $use_snake = 'default';
    public $short_snake = false;

    public $box = [];

    public $lookups = [
        'corner' => 'all_corners',
        'edge' => 'all_edges',
        'face' => 'all_faces',
    ];

    public $vector_word_index = [
        'conscious_meaning' => [ 'acronym' => 'cm', 'index' => 0 ],
        'conscious_understanding' => [ 'acronym' => 'cu', 'index' => 1 ],
        'conscious_feeling' => [ 'acronym' => 'cf', 'index' => 2 ],
        'subconscious_meaning' => [ 'acronym' => 'sm', 'index' => 3 ],
        'subconscious_understanding' => [ 'acronym' => 'su', 'index' => 4 ],
        'subconscious_feeling' => [ 'acronym' => 'sf', 'index' => 5 ]
    ];

    public $vector_index = [
        0 => [ 'acronym' => 'cm', 'word' => 'conscious_meaning' ],
        1 => [ 'acronym' => 'cu', 'word' => 'conscious_understanding' ],
        2 => [ 'acronym' => 'cf', 'word' => 'conscious_feeling' ],
        3 => [ 'acronym' => 'sm', 'word' => 'subconscious_meaning' ],
        4 => [ 'acronym' => 'su', 'word' => 'subconscious_understanding' ],
        5 => [ 'acronym' => 'sf', 'word' => 'subconscious_feeling' ]
    ];




    public function calculate_thinking_face($input1, $input2)
    {
        $input1_data = $this->cUnderstanding($input1);
        $this->mInteraction($input1_data['c']);
        $this->mInteraction($input1_data['s']);

        $input2_data = $this->sUnderstanding($input2);
        $this->mInteraction($input2_data['c']);
        $this->mInteraction($input2_data['s']);

        return [
            'c' => $input1_data,
            's' => $input2_data
        ];
    }


    public function calculate_starting_line($input1, $input2)
    {

        # add line between inputs
        $this->boxOutput('main_cube', [127.5, 127.5, 127.5]);
        $this->boxOutput('main_cube', [$input1, $input2], '', 'line');

        $understanding = $this->understandingInteraction([$input1, $input2]);

        $understanding = $this->understandingInteraction([[255, 0, 0]]);
        $m = $this->middleInteraction($understanding['c']);


        $mm = $this->middleInteraction($understanding['s']);
        $understanding = $this->understandingInteraction([[255, 255, 0]]);
        $this->middleInteraction($understanding['c']);
        $this->middleInteraction($understanding['s']);
        $understanding = $this->understandingInteraction([[0, 255, 0]]);
        $this->middleInteraction($understanding['c']);
        $this->middleInteraction($understanding['s']);
        $understanding = $this->understandingInteraction([[0, 255, 255]]);
        $this->middleInteraction($understanding['c']);
        $this->middleInteraction($understanding['s']);
        $understanding = $this->understandingInteraction([[0, 0, 255]]);
        $this->middleInteraction($understanding['c']);
        $this->middleInteraction($understanding['s']);
        $understanding = $this->understandingInteraction([[255, 0, 255]]);
        $this->middleInteraction($understanding['c']);
        $this->middleInteraction($understanding['s']);
        $understanding = $this->understandingInteraction([[255, 255, 255]]);
        $this->middleInteraction($understanding['c']);
        $this->middleInteraction($understanding['s']);
        $understanding = $this->understandingInteraction([[0, 0, 0]]);
        $this->middleInteraction($understanding['c']);
        $this->middleInteraction($understanding['s']);

        return [];
    }


    // public function calculate_hi($input1, $input2)
    // {
    //     $c = $this->projectAndDefinePoint($input1);
    //     $this->projectAndDefinePoint($c['c']);
    //     $this->projectAndDefinePoint($c['s']);

    //     $s = $this->projectAndDefinePoint($input2);

    //     return [
    //         'c' => $c,
    //         's' => $this->projectPoint($input2, true)
    //     ];
    // }

    public function calculate_hi($input1, $input2)
    {
        $c = $this->projectAndDefinePoint($input1);
        $this->projectPoint($c['c']);
        $this->projectPoint($c['s']);

        $s = $this->projectAndDefinePoint($input2);

        return [
            'c' => $c,
            's' => $this->projectPoint($input2)
        ];
    }


    
    // projectPoint
    // projectAndDefinePoint
    // projectPointConscious







    public function definePoints($projections_array, $tag = '', $color = '#ffffff')
    {

        $c = $this->define($projections_array['c']);
        $cs = $this->define($projections_array['cs']);
        $s = $this->define($projections_array['s']);

        return [
            'c' => $c[0],
            'cs' => $cs[0],
            's' => $s[0],
            // 'subconscious' => $projections_array, // same as c / cs / s
        ];
    }

    public function projectPoint($input, $block_output = false)
    {
        $this->projections = [];
        $projections = [];


        $projection = $this->project( $input );
        $projections[] = $projection;
        $this->outputProjection(...$projection);


        $middle_projection = $this->projections(...$projections);

        // make star snake conscious (angle extension)

        if ($this->show_project_snakes === true && $block_output === false) {

            $this->boxOutput('main_cube', $middle_projection['c'], 'C');
            $this->boxOutput('main_cube', $middle_projection['s'], 'S');
            $this->boxOutput('main_cube', $middle_projection['cs'], 'CS');

            $this->boxOutput('main_cube', [$middle_projection['c'], $middle_projection['s']], '', 'line');
            $this->boxOutput('main_cube', [$middle_projection['c'], $middle_projection['cs']], '', 'line');
            $this->boxOutput('main_cube', [$middle_projection['s'], $middle_projection['cs']], '', 'line');

            $this->boxOutput('main_cube', $input, '', 'line', rgbToHex($middle_projection['c'][0], $middle_projection['c'][1], $middle_projection['c'][2]), 10);

        }
            
        return [
            'c' => $middle_projection['c'],
            'cs' => $middle_projection['cs'],
            's' => $middle_projection['s'],
            'subconscious' => $middle_projection, // same as c / cs / s
        ];
    }


    public function projectAndDefinePoint($input, $tag = '', $color = '#ffffff')
    {
        $this->projections = [];
        $projections = [];



        $projection = $this->project( $input );
        $projections[] = $projection;
        $this->outputProjection(...$projection);


        $middle_projection = $this->projections(...$projections);

        // if (1) { # added more lines to the plus https://i.gyazo.com/e43264ee7751d03c4831c251cf6d6936.png
        //     $copy_output = $middle_projection;

        //     $middle_projection['c'] = $this->mix($copy_output['c'], $copy_output['cs']);
        //     $middle_projection['s'] = $this->mix($copy_output['s'], $copy_output['cs']);
        // }

        // make star snake conscious (angle extension)

        $c = $this->define($middle_projection['c']);
        $cs = $this->define($middle_projection['cs']);
        $s = $this->define($middle_projection['s']);


        if ($this->show_project_snakes === true || $add_to_box == true) {

            $this->boxOutput('main_cube', $c[0], 'C' . $tag);
            $this->boxOutput('main_cube', $s[0], 'S' . $tag);
            $this->boxOutput('main_cube', $cs[0], 'CS' . $tag);

            $this->boxOutput('main_cube', [$c[0], $s[0]], '', 'line', $color);
            $this->boxOutput('main_cube', [$c[0], $cs[0]], '', 'line', $color);
            $this->boxOutput('main_cube', [$s[0], $cs[0]], '', 'line', $color);

            $this->boxOutput('main_cube', $input, '', 'line', rgbToHex($cs[0][0], $cs[0][1], $cs[0][2]), 10);

        }


        return [
            'c' => $c[0],
            'cs' => $cs[0],
            's' => $s[0],
            'subconscious' => $middle_projection, // same as c / cs / s
        ];

    }

    public function projectPointConscious($input, $tag = '', $color = '#ffffff', $subconscious_protection = false)
    {
        $this->projections = [];
        $projections = [];


        $projection = $this->project( $input );
        $projections[] = $projection;
        $this->outputProjection(...$projection);


        $middle_projection = $this->projectionsConscious(...$projections);


        $middle_projection['c'] = $this->define($middle_projection['c'])[0];
        $middle_projection['cs'] = $this->define($middle_projection['cs'])[0];
        $middle_projection['s'] = $this->define($middle_projection['s'])[0];

        // make star snake conscious (angle extension)

        if ($this->show_project_snakes === true && $subconscious_protection === false) {

            $this->boxOutput('main_cube', $middle_projection['c'], 'C' . $tag);
            $this->boxOutput('main_cube', $middle_projection['s'], 'S' . $tag);
            $this->boxOutput('main_cube', $middle_projection['cs'], 'CS' . $tag);

            $this->boxOutput('main_cube', [$middle_projection['c'], $middle_projection['s']], '', 'line', $color);
            $this->boxOutput('main_cube', [$middle_projection['c'], $middle_projection['cs']], '', 'line', $color);
            $this->boxOutput('main_cube', [$middle_projection['s'], $middle_projection['cs']], '', 'line', $color);

            $this->boxOutput('main_cube', $input, '', 'line', rgbToHex($middle_projection['c'][0], $middle_projection['c'][1], $middle_projection['c'][2]), 10);

        }
            
        return [
            'c' => $middle_projection['c'],
            'cs' => $middle_projection['cs'],
            's' => $middle_projection['s'],
            'subconscious' => $middle_projection, // same as c / cs / s
        ];
    }



    


}



