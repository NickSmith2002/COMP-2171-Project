<?php

class ApplicationView extends ApplicationModel {
    
    private function displayTable($results) {
        echo(
            "<table>".
            "<colgroup>".
              "<col style=\"width:10%\">".
              "<col style=\"width:30%\">".
              "<col style=\"width:30%\">".
              "<col style=\"width:10%\">".
              "<col style=\"width:20%\">".
            "</colgroup>".
              "<thead>".
                "<tr>".
                  "<th>Application ID</th> <th>First Name</th> <th>Last Name</th> <th>Gender</th> <th>Status</th>".
                "</tr>".  
              "</thead>".  
              "<tbody>"
          );
          
          foreach ($results as $row){
            echo "<tr>";
            echo "<td>".$row['ApplicationID']."</td>" . "<td>".$row['First Name']."</td>" . "<td>".$row['Last Name']."</td>" . "<td>".$row['Gender']."</td>" .
            "<td>".
            "<div class=\"dropdown\">
                <input type=\"text\" class=\"textBox\" placeholder=\"". $row['Status'] ."\" readonly>
                    <div class=\"option\">
                        <div onclick=\"statusShow('Pending')\">Pending</div>
                            <div onclick=\"statusShow('Accepted')\">Accepted</div>
                            <div onclick=\"statusShow('Rejected')\">Rejected</div>
                        </div>
                    </div>
              </div>"
            ."</td>";
            echo "</tr>";
          }
          
          echo(
              "<tbody>".
            "</table>"
          );
    }

    //Implement display functions here
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



}