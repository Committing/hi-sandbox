<?php



class vectors extends box
{
    

    public $loop = [];

    public $previous_loop = [];

    public $vectors = [];

    public $g = null;

    // $this->group_by_properties = [
    //     'conscious'
    // ];

    public function __construct()
    {
        $this->g = new groups();
    }


    public function loadVectors($vector_type)
    {
        switch ($vector_type) {

            case 'hi':
                $this->color_group = $this->g->groups['hi'];
                break;

            case 'thinking_face':
                $this->color_group = $this->g->groups['thinking_face'];
                break;


            case 'starting_line':
                $this->color_group = $this->g->groups['starting_line'];
                $this->box_positions = $this->box_positions_starting_line;
                break;


        }

        if ( ! empty($this->previous_loop) ) {
            $this->loop = $this->previous_loop;
        } else {
            $this->loop = $this->onlyColorsArray($this->color_group);
        }
    }



    public function process_starting_line()
    {
        $this->result = $this->calculate_starting_line($this->loop['input1'], $this->loop['input2']);
    }




    public function process_thinking_face()
    {
        if ( ! empty($this->previous_loop) ) {
            $c1 = $this->previous_loop['s1'];
            $c2 = $this->previous_loop['s2'];
            $s1 = $this->previous_loop['c1'];
            $s2 = $this->previous_loop['c2'];
        } else {
            $c1 = $this->loop['c1'];
            $c2 = $this->loop['c2'];
            $s1 = $this->loop['s1'];
            $s2 = $this->loop['s2'];
        }

        $result_c = $this->calculate_thinking_face($c1, $s1);
        $result_s = $this->calculate_thinking_face($s2, $c2);

        $this->result = [
            'c1' => $result_c['c']['cs'],
            'c2' => $result_s['c']['cs'],
            's1' => $result_c['s']['cs'],
            's2' => $result_s['s']['cs'],
        ];
    }



    public function process_hi()
    {
        if ( ! empty($this->previous_loop) ) {
            $c1 = $this->previous_loop['s1'];
            $c2 = $this->previous_loop['s2'];
            $s1 = $this->previous_loop['c1'];
            $s2 = $this->previous_loop['c2'];
        } else {
            $c1 = $this->loop['c1'];
            $c2 = $this->loop['c2'];
            $s1 = $this->loop['s1'];
            $s2 = $this->loop['s2'];
        }

        $result_c = $this->calculate_hi($c1, $s1);
        $result_s = $this->calculate_hi($s2, $c2);

        $this->result = [
            'c1' => $result_c['c']['cs'],
            'c2' => $result_s['c']['cs'],
            's1' => $result_c['s']['cs'],
            's2' => $result_s['s']['cs'],
        ];
    }



}