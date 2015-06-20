<?php if(isset($data['message'])): ?>
    <div class="message <?php echo $data['message-type'] ?>">
        <?php echo $data['message']; ?>
        <?php
            if(isset($data['fields']))
                foreach($data['fields'] as $field){
                    echo '<span class="field">'.$field.'</span>';
                }
        ?>
    </div>
<?php endif; ?>