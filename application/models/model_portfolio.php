<?php 
class Model_Portfolio extends Model
{
    public function get_data()
    {
        $data = array(
            array (
                'year' => '1111',
                'name' => 'project name',
                'description' => 'project description'
            ),
            array (
                'year' => '2222',
                'name' => 'project name2',
                'description' => 'project description2'
            )
        );
        return $data;
    }
}