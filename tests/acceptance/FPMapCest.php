<?php

class FPMapCest
{
    public function _before(AcceptanceTester $I)
    {

    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
      $data = array();
      $row = 1;
      if (($handle = fopen("filtered_roster.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          // $num = count($data);
          // echo "<p> $num fields in line $row: <br /></p>\n";
          $row++;
          // for ($c=0; $c < $num; $c++) {
              // echo $data[$c] . "<br />\n";
          // }
      // foreach ($data as $name => $address){
      //   // $name = $person[0];
      //   // $address = $person[1];
      //   echo "{$name} lives at $address";
      // }
      echo "$data[0]";
      $name = $data[0];
      $home = $data[1];
      $I->amOnPage("/maps/dir/$home/701+Ocean+St,+Santa+Cruz,+CA/$home/");
      // $I->pressKey(['Control', 'P']);
      $I->pressKey('//html', array('ctrl','p'));
      $I->wait(1);
      $I->makeScreenshot($name);
    }
  fclose($handle);
  }
  // print_r($data);

    }
}
