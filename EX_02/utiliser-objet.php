<html>
    <p>
        <?php
            $date1 = new DateTime();
            echo $date1-> format( "y/m/d H:i:s") . "<br/>";
            
            $date2 = new DateTime();
            echo $date2 -> format("20/06/22 09:00:00") . "<br/>";
            
            $start = new DateTime('20-06-22');
            $end = new DateTime();
            $interval = $start->diff($end);
            echo $interval->format(" %R%d jours %R%H Heures, %R%i Minutes depuis le début de la piscine");
        ?>
    </p>
</html>