<?php

class ApplicationView extends ApplicationModel {
    
    private function displayTable($results) {
        echo(
            "<table>".
            "<colgroup>".
              "<col style=\"width:10%\">".
              "<col style=\"width:25%\">".
              "<col style=\"width:25%\">".
              "<col style=\"width:25%\">".
              "<col style=\"width:5%\">".
            "</colgroup>".
              "<thead>".
                "<tr>".
                  "<th>Application ID</th> <th>Name</th> <th>Gender</th> <th>Status</th> <th></th>".
                "</tr>".  
              "</thead>".  
              "<tbody>"
          );
          
          foreach ($results as $row){
            echo "<tr>";
            echo "<td>".$row['ApplicationID']."</td>" . "<td>".$row['First Name']. " " . $row['Last Name'] . "</td>" . "<td>".$row['Gender']."</td>" .
            "<td>".
            "<div class=\"dropdown\">
                <input type=\"text\" class=\"textBox ". $row['Status'] ."\" name = \"" . $row['ApplicationID']. "\" value=\"". $row['Status'] ."\" readonly>
                        <div class=\"option\">
                            <div onclick=\"statusShow('Pending', ". $row['ApplicationID'] . ")\">Pending</div>
                            <div onclick=\"statusShow('Accepted', ". $row['ApplicationID'] . ")\">Accepted</div>
                            <div onclick=\"statusShow('Rejected', ". $row['ApplicationID'] . ")\">Rejected</div>
                        </div>
            </div>
            
            </td>".
            "<td><button onclick=\"detailShow(". $row['ApplicationID'] . ")\"><i class=\"material-icons\">search</i></button></td>";
            echo "</tr>";
          }
          
          echo(
              "<tbody>".
            "</table>"
          );
    }


    //Implement display functions here
    public function printApplication($data){
      $results = $this->getApplication($data)[0];

      echo "Application ID: " . $results['ApplicationID']  . "\n";
      echo "Status: " . $results['Status'] . "\n";
      echo "First Name: " . $results['First Name'] . "\n";
      echo "Last Name: " . $results['Last Name'] . "\n";
      echo "Middle Inital: " . $results['Middle Initial'] . "\n";
      echo "DOB: " . $results['DOB'] . "\n";
      echo "Nationality: " . $results['Nationality'] . "\n";
      echo "Gender: " . $results['Gender'] . "\n";
      echo "Family Type: " . $results['Family Type'] . "\n";
      echo "Email: " . $results['Email Address'] . "\n";
      echo "ID Number: " . $results['DOB'] . "\n";
      echo "Level of Study: " . $results['Level of Study'] . "\n";
      echo "Year of Study: " . $results['Year of Study'] . "\n";
      echo "Programme: " . $results['Programme Name'] . "\n";
      echo "Faculty: " . $results['Faculty Name'] . "\n";
      echo "School: " . $results['Name of School'] . "\n";
      echo "Preferred Room Type: " . $results['Room Type'] . "\n";
      echo "Roommate Preference: " . $results['DOB'] . "\n";
    }

    public function showApplication($data) {
      $results = $this->getApplication($data);
      $this->displayTable($results);
    }


    public function showAllApplications() {
        $results = $this->getAllApplications();
        $this->displayTable($results);
    }

    public function showAcceptedApplications() {
        $results = $this->getAcceptedApplications();
        $this->displayTable($results);
    }
    public function showRejectedApplications() {
        $results = $this->getRejectedApplications();
        $this->displayTable($results);
    }
    public function showPendingApplications() {
        $results = $this->getPendingApplications();
        $this->displayTable($results);
    }


    public function showAscendingID(){
      $results = $this->getAllAscendingID();
      $this->displayTable($results);
    }
    public function showDescendingID(){
      $results = $this->getAllDescendingID();
      $this->displayTable($results);
    }
    public function showAscendingName(){
      $results = $this->getAllAscendingName();
      $this->displayTable($results);
    }
    public function showDescendingName(){
      $results = $this->getAllDescendingName();
      $this->displayTable($results);
    }
    

}