<?php
class readXML
{

    public function readXMLFile($fileName = 'sample-reaxml.xml', $keyVal = 'uniqueID')
    {
        $get = file_get_contents(dirname(__FILE__) . '/' . $fileName);
        $arr = simplexml_load_string($get);
        $json = json_encode($arr);
        $configData = json_decode($json, true);

        $finalArray = array();
        $index = 0;
        foreach ($configData as $field => $value) {

            $fieldArray = $configData[$field];

            foreach ($fieldArray as $fieldData => $valueData) {

                if (!is_array($valueData)) {
                    if ($fieldData == $keyVal) {
                        if (!is_array($valueData)) {
                            $finalArray[$index] = array($valueData => $field);
                            $index++;
                        }
                    }
                } else {
                    foreach ($valueData as $fieldDataNew => $valueDataNew) {
                        if ($fieldDataNew == $keyVal) {
                            if (!is_array($valueDataNew)) {
                                $finalArray[$index] = array($valueDataNew => $field);
                                $index++;
                            }
                        }
                    }
                }
            }
        }
        return $finalArray;
    }
}
