<?php    
function build_table($array){
    //add style
    $html = "<style>.stock{color:red}</style>";
    // start table
    $html .= '<table>';
    // header row
    $html .= '<tr>';
    foreach($array[0] as $key=>$value){
            $html .= '<th>' . $key . '</th>';
        }
    $html .= '</tr>';
    // data rows
    foreach( $array as $key=>$value){
      
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
                if($key2 == 'stock'){
                    $stock = $value2;
                    if($value2 == 0){
                        $html .= '<td class="stock">' . $value2 . '</td>';
                    }else{
                        $html .= '<td>' . $value2 . '</td>';
                    }
                }elseif($key2 == 'sale'){
                    $sale = $value2;
                    $html .= '<td>' . $value2 . '</td>';
                }else{
                    $html .= '<td>' . $value2 . '</td>'; 
                }
                
                
            
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';
    return $html;
}
$cars = [
        ['name' => "Volvo",         'stock' => 22,         'sale' => 18],
        ['name' => "BMW",           'stock' => 15,         'sale' => 13],
        ['name' => "Saab",          'stock' => 0,          'sale' => 5],
        ['name' => "Land Rover",    'stock' => 17,         'sale' => 1]
    ];
echo build_table($cars);

