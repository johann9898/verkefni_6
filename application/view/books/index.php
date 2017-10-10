<div class="container">
    <h1>Books</h1>
   
    <!-- add song form -->
    
    <!-- main content output -->
    <div class="box">
        <h3>List of books</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Nafn</td>
                <td>Útgáfa</td>
                <td>Útgáfuár</td>
            </tr>
            </thead>
            <tbody>
            <?php for ($i=0; $i < 3; $i++) { ?>
                <tr>
                    <td><?php echo $books[$i][0]; ?></td>
                    <td><?php echo $books[$i][1]; ?></td>
                    <td><?php echo $books[$i][2]; ?></td>
                    <td><a href="<?php echo $books[$i][3]; ?>">
                    <?php echo  $books[$i][3]; ?></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
