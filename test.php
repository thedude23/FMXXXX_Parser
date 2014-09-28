<?php
require_once 'FMXXXX_Parser/Parser.class.php';

$data = '00 00 00 00 00 00 03 87 08 1E 00 00 01 2E 43 A7 57 8F 00 FB 73 BB 78 14 04 F6 E0 00 3B 00 00 08 00 00 00 00 00 00 00 00 00 00 01 2E 43 A5 82 56 00 FB 73 BB 78 14 04 F6 E0 00 3A 00 00 08 00 00 00 00 00 00 00 00 00 00 01 2E 43 A3 AD 0B 00 FB 73 BB 78 14 04 F6 E0 00 39 00 00 08 00 00 00 00 00 00 00 00 00 00 01 2E 43 A1 D6 80 00 FB 73 BD E0 14 04 F4 80 00 00 00 00 05 00 00 00 00 00 00 00 00 00 00 01 2E 43 9B 27 90 00 FB 73 C2 18 14 05 30 60 00 00 00 82 05 00 00 00 00 00 00 00 00 00 00 01 2E 43 94 B7 20 00 FB 73 96 58 14 05 3F 00 00 00 00 2B 04 00 00 00 00 00 00 00 00 00 00 01 2E 43 90 00 22 00 FB 73 8C 78 14 05 4A A0 00 00 01 39 05 00 01 00 00 00 00 00 00 00 00 01 2E 43 65 75 95 00 FB 73 BB 00 14 04 F6 E0 00 3F 00 00 09 00 00 00 00 00 00 00 00 00 00 01 2E 43 63 A0 54 00 FB 73 BB 00 14 04 F6 E0 00 3E 00 00 08 00 00 00 00 00 00 00 00 00 00 01 2E 43 61 CB 1A 00 FB 73 BB 00 14 04 F6 E0 00 3A 00 00 09 00 00 00 00 00 00 00 00 00 00 01 2E 43 5F F5 E2 00 FB 73 BB 00 14 04 F6 E0 00 3A 00 00 09 00 00 00 00 00 00 00 00 00 00 01 2E 43 5E 20 AA 00 FB 73 BB 00 14 04 F6 E0 00 3D 00 00 09 00 00 00 00 00 00 00 00 00 00 01 2E 43 5C 4B 72 00 FB 73 BB 00 14 04 F6 E0 00 3B 00 00 09 00 00 00 00 00 00 00 00 00 00 01 2E 43 5A 76 08 00 FB 73 BB 00 14 04 F6 E0 00 38 00 00 09 00 00 00 00 00 00 00 00 00 00 01 2E 43 58 A0 A8 00 FB 73 BB 00 14 04 F6 E0 00 39 00 00 09 00 00 00 00 00 00 00 00 00 00 01 2E 43 56 CB 70 00 FB 73 BB 00 14 04 F6 E0 00 3C 00 00 09 00 00 00 00 00 00 00 00 00 00 01 2E 43 54 F6 31 00 FB 73 BB 00 14 04 F6 E0 00 3A 00 00 09 00 00 00 00 00 00 00 00 00 00 01 2E 43 53 20 CE 00 FB 73 BB 00 14 04 F6 E0 00 39 00 00 09 00 00 00 00 00 00 00 00 00 00 01 2E 43 51 4B 96 00 FB 73 BB 00 14 04 F6 E0 00 39 00 00 09 00 00 00 00 00 00 00 00 00 00 01 2E 43 4F 76 5E 00 FB 73 BB 00 14 04 F6 E0 00 39 00 00 0A 00 00 00 00 00 00 00 00 00 00 01 2E 43 4D A0 FE 00 FB 73 BB 00 14 04 F6 E0 00 36 00 00 09 00 00 00 00 00 00 00 00 00 00 01 2E 43 4B CB BD 00 FB 73 BB 00 14 04 F6 E0 00 39 00 00 09 00 00 00 00 00 00 00 00 00 00 01 2E 43 49 F6 7B 00 FB 73 BB 78 14 04 F7 A0 00 38 00 00 08 00 00 00 00 00 00 00 00 00 00 01 2E 43 48 21 39 00 FB 73 BB 78 14 04 F7 A0 00 36 00 00 08 00 00 00 00 00 00 00 00 00 00 01 2E 43 46 4B C5 00 FB 73 BB 78 14 04 F7 A0 00 37 00 00 08 00 00 00 00 00 00 00 00 00 00 01 2E 43 44 76 83 00 FB 73 BB 78 14 04 F7 A0 00 3B 00 00 08 00 00 00 00 00 00 00 00 00 00 01 2E 43 42 A1 41 00 FB 73 BB 78 14 04 F7 A0 00 3D 00 00 08 00 00 00 00 00 00 00 00 00 00 01 2E 43 40 CA C0 00 FB 73 BB 00 14 04 F8 20 00 43 00 00 05 00 00 00 00 00 00 00 00 00 00 01 2E 3E CE 02 D1 00 FB 73 BD D0 14 04 F7 A0 00 35 00 00 09 00 00 00 00 00 00 00 00 00 00 01 2E 3E CC 2D 71 00 FB 73 BD D0 14 04 F7 A0 00 36 00 00 09 00 00 00 00 00 00 00 00 1E 00 00 B7 7E';
$parser = new Parser($data);
$avl_data_array = $parser->parse();
//$avl_datas[0]->gps_element->getLongitude();
echo '-- Parsed AVL Data Array --';
echo '<pre>'; print_r($avl_data_array); echo '</pre>';
?>