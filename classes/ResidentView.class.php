<?php

class ResidentView extends ResidentModel {

    //Implement display function here
    public function showResidents() {

    }

    public function reportResidents($columns, $tags){
        
        return $this->displayTable($this->getResidentsColumns($columns), $tags);
    }

    public function presentAllResidentTable(){
      return $this->displayTableFormat($this->getResidentTable_present());
    }

    public function presentBlockRepTable(){
      return $this->displayTableFormat($this->getBlockRepTable_present());
    }

    public function presentResidentAdvisorTable(){
      return $this->displayTableFormat($this->getResidentAdvisorTable_present());
    }

    public function presentStandardResidentTable(){
      return $this->displayTableFormat($this->getStandardResidentTable_present());
    }

    private function displayTableFormat($results) {
        
      echo("<table> <thead> <tr>"); 
        
       
        echo("<th>Resident ID</th> <th>Position</th> <th>First Name</th> <th>Last Name</th> <th>Middle Initial</th> <th>Gender</th> <th>Phone Number</th> <th>Email Address</th> <th>Room Number</th>");
     
        
      echo("</tr> </thead> <tbody>");  
      
        foreach ($results as $row){
          echo "<tr>";
           
            echo("<td>" . $row["Resident ID"] . "</td>" . "<td>" . $row["Position"] . "</td>". "<td>" . $row["First Name"] . "</td>" ."<td>" . $row["Last Name"] . "</td>". "<td>" . $row["Middle Initial"] . "</td>". "<td>" . $row["Gender"] . "</td>" ."<td>" . $row["Phone Number"] . "</td>". "<td>" . $row["Email Address"] . "</td>" ."<td>" . $row["Room Number"] . "</td>");
          
          echo "</tr>";
        }
          
          echo("<tbody> </table>");
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