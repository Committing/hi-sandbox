<?php


/**
 * 
 * 
 * 
 * 
 *    All the color positions (vectors)
 * 
 * 
 * 
 * 
 * 
 */


class box_positions
{


    public $box_positions = [
        'infj' => [
            'all_edges' => [
                'blue_edge'             => [0, 127.5, 255],
                'orange_edge'           => [255, 127.5, 0],
                'pink_edge'             => [255, 0, 127.5],
                'green_edge'            => [0, 255, 127.5],
                'purple_edge'           => [127.5, 0, 255],
                'yellow_edge'           => [127.5, 255, 0],
                'white_cyan_edge'       => [127.5, 255, 255],
                'black_red_edge'        => [127.5, 0, 0],
                'black_green_edge'      => [0, 127.5, 0],
                'white_magenta_edge'    => [255, 127.5, 255],
                'black_blue_edge'       => [0, 0, 127.5],
                'white_yellow_edge'     => [255, 255, 127.5],
            ],
            'all_corners' => [
                'blue_corner'           => [0, 0, 255],
                'yellow_corner'         => [255, 255, 0],
                'turquoise_corner'      => [0, 255, 255],
                'red_corner'            => [255, 0, 0],
                'purple_corner'         => [255, 0, 255],
                'green_corner'          => [0, 255, 0],
                'white_corner'          => [255, 255, 255],
                'black_corner'          => [0, 0, 0],
            ],
            'all_faces' => [
                'green_face'            => [127.5, 255, 127.5],
                'purple_face'           => [127.5, 0, 127.5],
                'blue_face'             => [127.5, 127.5, 255],
                'yellow_face'           => [127.5, 127.5, 0],
                'teal_face'             => [0, 127.5, 127.5],
                'pink_face'             => [255, 127.5, 127.5],
            ],
        ],
        'enfp' => [
            'all_faces' => [
                'purple_face'           => [127.5, 0, 127.5],
                'green_face'            => [127.5, 255, 127.5],
                'yellow_face'           => [127.5, 127.5, 0],
                'blue_face'             => [127.5, 127.5, 255],
                'pink_face'             => [255, 127.5, 127.5],
                'teal_face'             => [0, 127.5, 127.5],
            ],
            'all_edges' => [
                'orange_edge'           => [255, 127.5, 0],
                'blue_edge'             => [0, 127.5, 255],
                'green_edge'            => [0, 255, 127.5],
                'pink_edge'             => [255, 0, 127.5],
                'yellow_edge'           => [127.5, 255, 0],
                'purple_edge'           => [127.5, 0, 255],
                'black_red_edge'        => [127.5, 0, 0],
                'white_cyan_edge'       => [127.5, 255, 255],
                'white_magenta_edge'    => [255, 127.5, 255],
                'black_green_edge'      => [0, 127.5, 0],
                'black_blue_edge'       => [0, 0, 127.5],
                'white_yellow_edge'     => [255, 255, 127.5],
            ],
            'all_corners' => [
                'yellow_corner'         => [255, 255, 0],
                'blue_corner'           => [0, 0, 255],
                'red_corner'            => [255, 0, 0],
                'turquoise_corner'      => [0, 255, 255],
                'green_corner'          => [0, 255, 0],
                'purple_corner'         => [255, 0, 255],
                'black_corner'          => [0, 0, 0],
                'white_corner'          => [255, 255, 255],
            ],
        ]
    ];




    /**
     * 
     * Now faces are first.
     * 
     * Also swapped order within faces
     * 
     */
    public $box_positions_starting_line = [
        'infj' => [
            'all_faces' => [
                'teal_face'             => [0, 127.5, 127.5], # swapped
                'pink_face'             => [255, 127.5, 127.5], # swapped
                'green_face'            => [127.5, 255, 127.5],
                'purple_face'           => [127.5, 0, 127.5],
                'blue_face'             => [127.5, 127.5, 255],
                'yellow_face'           => [127.5, 127.5, 0],
            ],
            'all_edges' => [
                'blue_edge'             => [0, 127.5, 255],
                'orange_edge'           => [255, 127.5, 0],
                'pink_edge'             => [255, 0, 127.5],
                'green_edge'            => [0, 255, 127.5],
                'purple_edge'           => [127.5, 0, 255],
                'yellow_edge'           => [127.5, 255, 0],
                'white_cyan_edge'       => [127.5, 255, 255],
                'black_red_edge'        => [127.5, 0, 0],
                'black_green_edge'      => [0, 127.5, 0],
                'white_magenta_edge'    => [255, 127.5, 255],
                'black_blue_edge'       => [0, 0, 127.5],
                'white_yellow_edge'     => [255, 255, 127.5],
            ],
            'all_corners' => [
                'blue_corner'           => [0, 0, 255],
                'yellow_corner'         => [255, 255, 0],
                'turquoise_corner'      => [0, 255, 255],
                'red_corner'            => [255, 0, 0],
                'purple_corner'         => [255, 0, 255],
                'green_corner'          => [0, 255, 0],
                'white_corner'          => [255, 255, 255],
                'black_corner'          => [0, 0, 0],
            ],
        ],
        'enfp' => [
            'all_faces' => [
                'pink_face'             => [255, 127.5, 127.5], # swapped
                'teal_face'             => [0, 127.5, 127.5], # swapped
                'purple_face'           => [127.5, 0, 127.5],
                'green_face'            => [127.5, 255, 127.5],
                'yellow_face'           => [127.5, 127.5, 0],
                'blue_face'             => [127.5, 127.5, 255],
            ],
            'all_edges' => [
                'orange_edge'           => [255, 127.5, 0],
                'blue_edge'             => [0, 127.5, 255],
                'green_edge'            => [0, 255, 127.5],
                'pink_edge'             => [255, 0, 127.5],
                'yellow_edge'           => [127.5, 255, 0],
                'purple_edge'           => [127.5, 0, 255],
                'black_red_edge'        => [127.5, 0, 0],
                'white_cyan_edge'       => [127.5, 255, 255],
                'white_magenta_edge'    => [255, 127.5, 255],
                'black_green_edge'      => [0, 127.5, 0],
                'black_blue_edge'       => [0, 0, 127.5],
                'white_yellow_edge'     => [255, 255, 127.5],
            ],
            'all_corners' => [
                'yellow_corner'         => [255, 255, 0],
                'blue_corner'           => [0, 0, 255],
                'red_corner'            => [255, 0, 0],
                'turquoise_corner'      => [0, 255, 255],
                'green_corner'          => [0, 255, 0],
                'purple_corner'         => [255, 0, 255],
                'black_corner'          => [0, 0, 0],
                'white_corner'          => [255, 255, 255],
            ],
        ]
    ];











    public function projectionsConscious(...$projections)
    {
        // pr($projections);
        // Precompute acronyms for middle_star using array_column for efficiency
        $acronyms = array_column($this->vector_index, 'acronym');

        // Build $to_mix by grouping projections' values by their keys
        $to_mix = [];
        foreach ($projections as $var) {
            foreach ($var as $k => $v) {
                $to_mix[$k][] = $v;
            }
        }

        // Mix each group to create $new_mix
        $new_mix = [];
        foreach ($to_mix as $var) {
            $new_mix[] = $this->mix(...$var);
        }

        // Map new_mix to middle_star using precomputed acronyms
        $middle_star = [];
        foreach ($new_mix as $key => $var) {
            $middle_star[$acronyms[$key]] = $var;
        }

        $this->outputProjection(...array_values($middle_star));

        // Precompute type to indices mapping to avoid repetitive lookups


        /**
         * 
         * SWAPPED AROUND FOR VERSION 2
         * (rotated line)
         * 
         */
        $typeIndices = [
            'feeling' => [
                'c' => $this->vector_word_index['conscious_meaning']['index'],
                's' => $this->vector_word_index['subconscious_meaning']['index'],
            ],
            'understanding' => [
                'c' => $this->vector_word_index['conscious_feeling']['index'],
                's' => $this->vector_word_index['subconscious_feeling']['index'],
            ],
            'meaning' => [
                'c' => $this->vector_word_index['conscious_understanding']['index'],
                's' => $this->vector_word_index['subconscious_understanding']['index'],
            ],
        ];





        // Determine process based on closest points using switch for clarity
        $process = [];
        foreach ($projections as $key => $var) {
            $closest = $this->findTheClosestPoint($this->projections[$key]);
            switch ($closest['type']) {
                case 'all_faces':
                    $type = 'feeling';
                    break;
                case 'all_edges':
                    $type = 'understanding';
                    break;
                case 'all_corners':
                    $type = 'meaning';
                    break;
                default:
                    $type = null; // Optional: Handle unexpected values
            }

            $process[] = [
                'projection_id' => $key,
                'type' => $type,
                'position' => $closest['color']
            ];
        }

        // Build conscious and subconscious arrays with precomputed indices
        $conscious = [];
        $subconscious = [];
        foreach ($process as $var) {
            $type = $var['type'];
            $indices = $typeIndices[$type];
            $projId = $var['projection_id'];
            $conscious[] = $projections[$projId][$indices['c']];
            $subconscious[] = $projections[$projId][$indices['s']];
        }

        // Determine and add middle star positions using match for efficiency
        $cs = $this->mix(...$this->projections);
        $closestCs = $this->findTheClosestPoint($cs);

        $use_snake_type = $closestCs['type'];

        if ( $this->use_snake != 'default' ) {
            $use_snake_type = $this->use_snake;
        }

        switch ($use_snake_type) {
            case 'all_faces':
                $conscious[]    = $middle_star['cf'];
                $subconscious[] = $middle_star['sf'];
                break;
            case 'all_edges':
                $conscious[]    = $middle_star['cu'];
                $subconscious[] = $middle_star['su'];
                break;
            case 'all_corners':
                $conscious[]    = $middle_star['cm'];
                $subconscious[] = $middle_star['sm'];
                break;
            case 'cs':
                $conscious[] = $cs;
                $subconscious[] = $cs;
                break;
        }

        $output = [];
        $output['c'] = $this->mix(...$conscious);
        $output['cs'] = $this->mix(...array_merge($conscious, $subconscious));
        $output['s'] = $this->mix(...$subconscious);
        $output['projection'] = array_values($middle_star);

        if ($this->short_snake === true) {
            $copy_output = $output;

            $output['c'] = $this->mix($copy_output['c'], $copy_output['cs']);
            $output['s'] = $this->mix($copy_output['s'], $copy_output['cs']);
        }

        return $output;
    }













    /********
     * 
     * 
     * 
     * 
     * EVERYTHING BELOW ARE LEGACY FUNCTIONS
     * 
     * 
     * 
     * 
     */
    public function interaction($input1, $input2)
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


    public function cUnderstanding($input)
    {
        $this->projections = [];
        $projections = [];

        $projection = $this->project( $input );
        $projections[] = $projection;

        $middle_projection = $this->projections(...$projections);

        $NC = $this->define($middle_projection['c']);
        $NCS = $this->define($middle_projection['cs']);
        $NS = $this->define($middle_projection['s']);

        $this->boxOutput('main_cube', $NC[0]);
        $this->boxOutput('main_cube', $NS[0]);
        $this->boxOutput('main_cube', $NCS[0]);

        $this->boxOutput('main_cube', [$NC[0], $NS[0]], '', 'line');
        $this->boxOutput('main_cube', [$NC[0], $NCS[0]], '', 'line');
        $this->boxOutput('main_cube', [$NS[0], $NCS[0]], '', 'line');

        $this->boxOutput('main_cube', $input, '', 'line', $this->rgbToHex($NCS[0][0], $NCS[0][1], $NCS[0][2]), 10);

        return [
            'c' => $NC[0],
            'cs' => $NCS[0],
            's' => $NS[0]
        ];

    }


    public function sUnderstanding($input)
    {

        $this->projections = [];
        $projections = [];

        $projection = $this->project( $input );
        $projections[] = $projection;

        $middle_projection = $this->projections(...$projections);

        $this->boxOutput('main_cube', $middle_projection['c']);
        $this->boxOutput('main_cube', $middle_projection['s']);
        $this->boxOutput('main_cube', $middle_projection['cs']);

        $this->boxOutput('main_cube', [$middle_projection['c'], $middle_projection['s']], '', 'line');
        $this->boxOutput('main_cube', [$middle_projection['c'], $middle_projection['cs']], '', 'line');
        $this->boxOutput('main_cube', [$middle_projection['s'], $middle_projection['cs']], '', 'line');

        $this->boxOutput('main_cube', $input, '', 'line', $this->rgbToHex($middle_projection['c'][0], $middle_projection['c'][1], $middle_projection['c'][2]), 10);

        return [
            'c' => $middle_projection['c'],
            'cs' => $middle_projection['cs'],
            's' => $middle_projection['s']
        ];

    }

    public function understandingInteraction($inputs)
    {
        $this->projections = [];
        $projections = [];

        foreach ($inputs as $input) {

            $projection = $this->project( $input );

            $projections[] = $projection;
            $this->outputProjection(...$projection);

        }

        $middle_projection = $this->projections(...$projections);

        $NC = $this->define($middle_projection['c']);
        $NS = $this->define($middle_projection['s']);
        $NCS = $this->define($middle_projection['cs']);

        
        if ($this->box_log || $this->conscious_box_log) {

            $this->boxOutput('main_cube', $NC[0], 'NC');
            $this->boxOutput('main_cube', $NS[0], 'NS');
            $this->boxOutput('main_cube', $NCS[0], 'NCS');

            $this->boxOutput('main_cube', [$NC[0], $NS[0]], '', 'line');
            $this->boxOutput('main_cube', [$NC[0], $NCS[0]], '', 'line');
            $this->boxOutput('main_cube', [$NS[0], $NCS[0]], '', 'line');

            $this->boxOutput('main_cube', [$inputs[0][0], $inputs[0][1]], '', 'line', rgbToHex($NCS[0][0], $NCS[0][1], $NCS[0][2]), 10);

        }
          
        if ($this->box_log) {

            $this->boxOutput('main_cube', $middle_projection['c'], 'C');
            $this->boxOutput('main_cube', $middle_projection['s'], 'S');
            $this->boxOutput('main_cube', $middle_projection['cs'], 'CS');

            $this->boxOutput('main_cube', [$middle_projection['c'], $middle_projection['s']], '', 'line');
            $this->boxOutput('main_cube', [$middle_projection['c'], $middle_projection['cs']], '', 'line');
            $this->boxOutput('main_cube', [$middle_projection['s'], $middle_projection['cs']], '', 'line');

        }

        return [
            'c' => $NC[0],
            'cs' => $NCS[0],
            's' => $NS[0]
        ];

    }

    public function middleInteraction($color, $line_color = '#ffff00')
    {
        $this->projections = [];

        $projection = $this->project( $color );
        $this->outputProjection(...$projection);
        // tick
        $projections = $this->projections($projection);

        if ($this->box_log || $this->conscious_box_log) {

            $this->boxOutput('main_cube', $projections['c'], 'C');
            $this->boxOutput('main_cube', $projections['s'], 'S');
            $this->boxOutput('main_cube', $projections['cs'], 'CS');
            $this->boxOutput('main_cube', [$projections['c'], $projections['s']], '', 'line', $line_color);
            $this->boxOutput('main_cube', [$projections['c'], $projections['cs']], '', 'line', $line_color);
            $this->boxOutput('main_cube', [$projections['s'], $projections['cs']], '', 'line', $line_color);

        }

        $this->define($projections['c']);
        $this->define($projections['s']);
        $this->define($projections['cs']);

        return [
            'c' => $projections['c'],
            's' => $projections['s'],
            'cs' => $projections['cs']
        ];
    }


    public function outputProjection(...$colors)
    {

        if (!$this->box_log) {
            return;
        }

        foreach ($colors as $key => $color) {

            $this->boxOutput('main_cube', $color, $this->vector_index[$key]['acronym'] );

            // $this->boxOutput('main_cube', [$color, $this->center], '', 'line');

        }

        $this->boxOutput('main_cube', [$colors[0], $colors[1]], '', 'line');
        $this->boxOutput('main_cube', [$colors[0], $colors[2]], '', 'line');
        $this->boxOutput('main_cube', [$colors[1], $colors[2]], '', 'line');
        $this->boxOutput('main_cube', [$colors[3], $colors[5]], '', 'line');
        $this->boxOutput('main_cube', [$colors[3], $colors[4]], '', 'line');
        $this->boxOutput('main_cube', [$colors[5], $colors[4]], '', 'line');
        
    }

    public function mInteraction($color, $line_color = '#ffff00')
    {
        $this->projections = [];

        $projection = $this->project( $color );

        $projections = $this->projections($projection);

        $this->boxOutput('main_cube', $projections['c']);
        $this->boxOutput('main_cube', $projections['s']);
        $this->boxOutput('main_cube', $projections['cs']);
        $this->boxOutput('main_cube', [$projections['c'], $projections['s']], '', 'line', $line_color);
        $this->boxOutput('main_cube', [$projections['c'], $projections['cs']], '', 'line', $line_color);
        $this->boxOutput('main_cube', [$projections['s'], $projections['cs']], '', 'line', $line_color);

        $this->define($projections['c']);
        $this->define($projections['s']);
        $this->define($projections['cs']);

        return [
            'c' => $projections['c'],
            's' => $projections['s'],
            'cs' => $projections['cs']
        ];
    }


    public function project($color, $ptc = 'infj', $pts = 'enfp')
    {
        $this->projections[] = $color;

        $this->boxOutput('main_cube', $color);

        $closest_corner = $this->closestMix($this->name, $color, $this->lookups['corner'], $ptc);
        $closest_edge = $this->closestMix($this->name, $color, $this->lookups['edge'], $ptc);
        $closest_face = $this->closestMix($this->name, $color, $this->lookups['face'], $ptc);

        $furthest_corner = $this->furthestMix($this->name, $color, $this->lookups['corner'], $pts);
        $furthest_edge = $this->furthestMix($this->name, $color, $this->lookups['edge'], $pts);
        $furthest_face = $this->furthestMix($this->name, $color, $this->lookups['face'], $pts);

        $c_cm = $this->mix($closest_corner['color'], $furthest_face['color']);
        $c_cu = $this->mix($closest_edge['color'], $furthest_corner['color']);
        $c_cf = $this->mix($closest_face['color'], $furthest_edge['color']);

        $s_sm = $this->mix($furthest_corner['color'], $closest_face['color']);
        $s_su = $this->mix($furthest_edge['color'], $closest_corner['color']);
        $s_sf = $this->mix($furthest_face['color'], $closest_edge['color']);

        return [ $c_cm, $c_cu, $c_cf, $s_sm, $s_su, $s_sf ];
    }


    public function mix(...$colors)
    {
        return $this->mixManyColors(...$colors);
    }


    public function mixManyColors(...$colors) {
        $numColors = count($colors);
        
        $rTotal = array_sum(array_column($colors, 0));
        $gTotal = array_sum(array_column($colors, 1));
        $bTotal = array_sum(array_column($colors, 2));

        $rAvg = $rTotal / $numColors;
        $gAvg = $gTotal / $numColors;
        $bAvg = $bTotal / $numColors;

        return [$rAvg, $gAvg, $bAvg];
    }


    public function closestMix($name, $now_color, $type = 'corner')
    {
        $closest = $this->findClosestPoint($now_color, $type);

        $color = $this->mix($now_color, $closest['color']);

        return [
            'color' => $color,
            'closest' => $closest,
        ];
    }


    public function furthestMix($name, $now_color, $type = 'corner', $pt = 'infj')
    {
        $furthest = $this->findFurthestPoint($now_color, $type, $pt);

        $color = $this->mixManyColors($now_color, $furthest['color']);

        return [
            'color' => $color,
            'furthest' => $furthest,
        ];
    }

    public function findFurthestPoint(array $input, $type = 'corners', $pt = 'infj') {
        $maxDistance = -INF;
        $furthest = null;
        $furthestIndex = -1;
        
        foreach ($this->box_positions[$pt][$type] as $index => $color) {
            $distance = sqrt(
                pow($input[0] - $color[0], 2) +
                pow($input[1] - $color[1], 2) +
                pow($input[2] - $color[2], 2)
            );

            if ($distance > $maxDistance) {
                $maxDistance = $distance;
                $furthest = $color;
                $furthestIndex = $index;
            }
        }
        
        return [
            'index'    => $furthestIndex,
            'color'    => $furthest,
            'distance' => $maxDistance
        ];
    }


    public function findTheClosestPoint(array $input, $include_black_and_white = false, $pt = 'infj') {
        $minDistance = INF;
        $closest = null;
        $closestGroup = '';
        $the_type = '';
        $closestIndex = -1;
        
        foreach ($this->box_positions[$pt] as $type => $arr) {

            if (strpos($type, "all_") !== false && $type) {
                //
            } else {
                continue;
            }

            foreach ($arr as $index => $color) {

                if ($type == 'bw' && $include_black_and_white === false) {
                    continue;
                }

                // Calculate the Euclidean distance
                $distance = sqrt(
                    pow($input[0] - $color[0], 2) +
                    pow($input[1] - $color[1], 2) +
                    pow($input[2] - $color[2], 2)
                );

                if ($distance < $minDistance) {
                    $minDistance = $distance;
                    $closest = $color;
                    $closestIndex = $index;
                    $the_type = $type;
                }
            }
        }
        
        return [
            'index'    => $closestIndex,
            'type'     => $the_type,
            'color'    => $closest,
            'distance' => $minDistance
        ];
    }

    public function findClosestPoint(array $input, $type = 'corners', $pt = 'infj') {
        $minDistance = INF;
        $closest = null;
        $closestGroup = '';
        $closestIndex = -1;
        
        foreach ($this->box_positions[$pt][$type] as $index => $color) {
            
            $distance = sqrt(
                pow($input[0] - $color[0], 2) +
                pow($input[1] - $color[1], 2) +
                pow($input[2] - $color[2], 2)
            );

            if ($distance < $minDistance) {
                $minDistance = $distance;
                $closest = $color;
                $closestIndex = $index;
            }
        }
        
        return [
            'index'    => $closestIndex,
            'color'    => $closest,
            'distance' => $minDistance
        ];
    }


    public function findExactClosestPoint(array $input, $include_black_and_white = false, $pt = 'infj') {
        $minDistance = INF;
        $closest = null;
        $closestGroup = '';
        $the_type = '';
        $closestIndex = -1;
        
        foreach ($this->box_positions[$pt] as $type => $arr) {

            if (strpos($type, "all_") !== false && $type) {
                //
            } else {
                continue;
            }

            foreach ($arr as $index => $color) {

                // Calculate the Euclidean distance
                $distance = sqrt(
                    pow($input[0] - $color[0], 2) +
                    pow($input[1] - $color[1], 2) +
                    pow($input[2] - $color[2], 2)
                );

                if ($distance < $minDistance) {
                    $minDistance = $distance;
                    $closest = $color;
                    $closestIndex = $index;
                    $the_type = $type;
                }
            }
        }
        
        return [
            'index'    => $closestIndex,
            'type'     => $the_type,
            'color'    => $closest,
            'distance' => $minDistance
        ];
    }

    public function projections(...$projections)
    {
        $to_mix = [];

        foreach ($projections as $key => $var) {

            foreach ($var as $k => $v) {

                $to_mix[$k][] = $v;

            }

        }

        $new_mix = [];

        foreach ($to_mix as $var) {

            $new_mix[] = $this->mix(...$var);

        }

        $middle_star = [];

        foreach ($new_mix as $key => $var) {
            
            $middle_star[$this->vector_index[$key]['acronym']] = $var;

        }



        $process = [];

        foreach ($projections as $key => $var) {

            $closest = $this->findExactClosestPoint( $this->projections[$key] );

            if ($closest['type'] == 'all_faces') {
                $type = 'feeling';
            }

            if ($closest['type'] == 'all_edges') {
                $type = 'understanding';
            }

            if ($closest['type'] == 'all_corners') {
                $type = 'meaning';
            }

            $process[] = [
                'projection_id' => $key,
                'type' => $type,
                'position' => $closest['color']
            ];

        }

        $c = [];
        $s = [];

        foreach ($process as $key => $var) {

            $index_search_c = $this->vector_word_index['conscious_' . $var['type']]['index'];
            $index_search_s = $this->vector_word_index['subconscious_' . $var['type']]['index'];

            $matching_star_position_c = $projections[$var['projection_id']][$index_search_c];
            $matching_star_position_s = $projections[$var['projection_id']][$index_search_s];

            $c[] = $matching_star_position_c;
            $s[] = $matching_star_position_s;

        }

        $cs = $this->mix(...$this->projections);
        $closest = $this->findExactClosestPoint( $cs );

        if ($closest['type'] == 'all_faces') {
            $c[] = $middle_star['cf'];
            $s[] = $middle_star['sf'];
        }

        if ($closest['type'] == 'all_edges') {
            $c[] = $middle_star['cu'];
            $s[] = $middle_star['su'];
        }

        if ($closest['type'] == 'all_corners') {
            $c[] = $middle_star['cm'];
            $s[] = $middle_star['sm'];
        }


        return [
            'c' => $this->mix(...$c),
            'cs' => $this->mix(...array_merge($c, $s)),
            's' => $this->mix(...$s),
            'projection' => array_values($middle_star)
        ];

    }


    public function define(...$colors)
    {
        $new_positions = [];

        foreach ($colors as $color) {

            $distance = $this->distance($color, $this->center);
            $angle = $this->angle($color, $this->center);

            $new_positions[] = $this->move($color, $distance, $angle['azimuth'], $angle['elevation']);

        }

        return $new_positions;
    }


    public function distance($rgb1, $rgb2) {
        $rDiff = $rgb1[0] - $rgb2[0];
        $gDiff = $rgb1[1] - $rgb2[1];
        $bDiff = $rgb1[2] - $rgb2[2];

        return sqrt($rDiff * $rDiff + $gDiff * $gDiff + $bDiff * $bDiff);
    }


    public function angle($rgb1, $rgb2) {
        list($r1, $g1, $b1) = $rgb1;
        list($r2, $g2, $b2) = $rgb2;

        $dr = $r2 - $r1;
        $dg = $g2 - $g1;
        $db = $b2 - $b1;

        $distance = sqrt($dr**2 + $dg**2 + $db**2);
        if ($distance == 0) {
            return ['azimuth' => 0, 'elevation' => 0];
        }

        $azimuth = rad2deg(atan2($dg, $dr));
        
        $horizontalMagnitude = sqrt($dr**2 + $dg**2);
        $elevation = rad2deg(atan2($db, $horizontalMagnitude));

        return ['azimuth' => $azimuth, 'elevation' => $elevation];
    }


    public function move($rgb, $distance, $azimuthDegrees, $elevationDegrees = 0) {
        list($r, $g, $b) = $rgb;

        $azimuth = deg2rad($azimuthDegrees);
        $elevation = deg2rad($elevationDegrees);

        $deltaR = $distance * cos($elevation) * cos($azimuth);
        $deltaG = $distance * cos($elevation) * sin($azimuth);
        $deltaB = $distance * sin($elevation);

        $newR = $r - $deltaR;
        $newG = $g - $deltaG;
        $newB = $b - $deltaB;

        return [$newR, $newG, $newB];
    }


    public function rgbToHex($r, $g, $b) {
        return '#' .
            str_pad(dechex($r), 2, '0', STR_PAD_LEFT) . 
            str_pad(dechex($g), 2, '0', STR_PAD_LEFT) . 
            str_pad(dechex($b), 2, '0', STR_PAD_LEFT);
    }


    public function testOutputManually()
    {
        foreach ($this->box['main_cube'] as $var) {
            if (isset($var['type']) && $var['type'] == 'line' && isset($var['position'][0][0])) {
                echo "addBigLine('cube', " . $var['position'][0][0] . ", " . $var['position'][0][1] . ", " . $var['position'][0][2] . ", " . $var['position'][1][0] . ", " . $var['position'][1][1] . ", " . $var['position'][1][2] . ");<br />";
            } else {
                echo "addBigSphere('cube', " . $var['position'][0] . ", " . $var['position'][1] . ", " . $var['position'][2] . ");<br />";
            }
        }

    }


    # data to be shown in an rgb cube (0-255, 0-255, 0-255)
    public function boxOutput($name, $position, $label = '', $type = '', $line_color = '#ffffff', $line_width = 1)
    {
        $this->box[$name][] = [
            'position' => $position,
            'label' => $label,
            'type' => $type, // for lines (otherwise default to dots)
            'line_color' => $line_color,
            'line_width' => $line_width
        ];
    }





}