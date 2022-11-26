<?php

class ResidentView extends ResidentModel {

    //Implement display function here
    public function showResidents() {

    }

    public function reportResidents($columns, $tags){
        
        return $this->displayTable($this->getResidentsColumns($columns), $tags);
    }

    public function reportBlock($columns, $tags, $block){
        
      return $this->displayTable($this->getBlockResidents($columns, $block), $tags);
  }



    private function displayTable($results, $tags) {
        
      echo("<table> <thead> <tr>"); 
        
      foreach ($tags as $value) {
        echo("<th>" . $value . "</th>");
      }
        
      echo("</tr> </thead> <tbody>");  
      
        foreach ($results as $row){
          echo "<tr>";
          foreach ($tags as $value) {
            echo("<td>" . $row[$value] . "</td>");
          }
          echo "</tr>";
        }
          
          echo("<tbody> </table>");
    }
}