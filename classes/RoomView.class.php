<?php

class RoomView extends RoomModel {
    public function showAllRooms(){
        return $this->displayTable($this->getAllRooms());
    }

    private function displayTable($results) {
        echo(
            "<table>".
              "<thead>".
                "<tr>".
                  "<th>Room Number</th> <th>Room Type</th> <th>Block</th> <th>Availability Status</th> <th>Resident ID #1</th> <th>Resident ID #2</th>".
                "</tr>".  
              "</thead>".  
              "<tbody>"
          );
          
          foreach ($results as $row){
            echo "<tr>";
            echo "<td>".$row['Room Number']."</td>" . "<td>".$row['Room Type']. " " . $row['Block'] . "</td>" . "<td>".$row['Availability Status']."</td>" . "<td>".$row['Resident ID #1']."</td>" . "<td>".$row['Resident ID #2']."</td>";
            echo "</tr>";
          }
          
          echo(
              "<tbody>".
            "</table>"
          );

    }
}