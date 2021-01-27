<!-- This is our main Template File -->

<div class="card w-100">
    <div class="card-header bg-primary">
        <h6 class="text-center text-light pt-2">WP Content Protector (Free)</h6>
    </div>
    
    <ul class="nav nav-tabs mt-3" role="tablist">
        <li class="nav-item">
            <a class="nav-link active bg-primary text-light" data-toggle="tab" href="#main">Main Settings</a>
        </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
        <h6 class="mt-3">Content Protection Using Javascript</h6>
        <div id="main" class="tab-pane active">
            
            <hr>
            <form action="options.php" method="POST">
                <!-- Right Click -->
                <div class="row mt-3">

                    <div class="col-lg-10">
                        <h6>Prevent Users to Right Click</h6>
                    </div>

                    <div class="col-lg-2">
                        <?php
                        do_settings_fields('rightclick', 'section_id');
                        settings_fields('section_id');
                        ?>
                    </div>
                </div>
                <hr>
                
                <!-- Drag Content -->
                <div class="row mt-3">
                    
                    <div class="col-lg-10">
                        <h6>Prevent Users to Drag Content/Image</h6>
                    </div>
                    
                    <div class="col-lg-2">
                        <?php
                        do_settings_fields('dragcontent', 'section_id');
                        settings_fields('section_id');
                        ?>
                    </div>
                </div>
                <hr>
                
                <!-- Cut Copy -->
                <div class="row mt-3">
                    
                    <div class="col-lg-10">
                        <h6>Prevent Users to Cut/Copy/Paste</h6>
                        <p>CTRL+X/CTRL+C/CTRL+P</p>
                    </div>
                    
                    <div class="col-lg-2">
                        <?php
                        do_settings_fields('copypaste', 'section_id');
                        settings_fields('section_id');
                        ?>
                    </div>
                </div>
                <hr>
                
                <!-- Cut Copy Paste -->
                <div class="row mt-3">
                    
                    <div class="col-lg-10">
                        <h6>Prevent Users to Enable Developer Tools</h6>
                        <p>CTRL+SHIFT+I/F12</p>
                    </div>
                    
                    <div class="col-lg-2">
                        <?php
                        do_settings_fields('devmode', 'section_id');
                        settings_fields('section_id');
                        ?>
                    </div>
                </div>
                <hr>
                
                <!-- Text Selection -->
                <div class="row mt-3">
                    <div class="col-lg-10">
                        <h6>Prevent Users to Text Selection</h6>
                    </div>
                    
                    <div class="col-lg-2">
                        <?php
                        do_settings_fields('selection', 'section_id');
                        settings_fields('section_id');
                        ?>
                    </div>
                </div>
                <hr>
                
                <!-- Print Page -->
                <div class="row mt-3">
                    <div class="col-lg-10">
                        <h6>Prevent Users to Print Page</h6>
                        <p>CTRL+P</p>
                    </div>
                    
                    <div class="col-lg-2">
                        <?php
                        do_settings_fields('print', 'section_id');
                        settings_fields('section_id');
                        ?>
                    </div>
                </div>
                <hr>

                <!-- Save Page -->
                <div class="row mt-3">
                    <div class="col-lg-10">
                        <h6>Prevent Users to Save Page</h6>
                        <p>CTRL+S</p>
                    </div>
                
                    <div class="col-lg-2">
                        <?php
                        do_settings_fields('savepage', 'section_id');
                        settings_fields('section_id');
                        ?>
                    </div>
                </div>
                <hr>

                <!-- Select All Page -->
                <div class="row mt-3">
                    <div class="col-lg-10">
                        <h6>Prevent Users to Select All</h6>
                        <p>CTRL+A</p>
                    </div>
                
                    <div class="col-lg-2">
                        <?php
                        do_settings_fields('slcall', 'section_id');
                        settings_fields('section_id');
                        ?>
                    </div>
                </div>
                <hr>

                <!-- View Page Source -->
                <div class="row mt-3">
                    <div class="col-lg-10">
                        <h6>Prevent Users to View Page Source</h6>
                        <p>CTRL+U</p>
                    </div>
                
                    <div class="col-lg-2">
                        <?php
                        do_settings_fields('psource', 'section_id');
                        settings_fields('section_id');
                        ?>
                    </div>
                </div>
                <hr>                
                
        </div>
    </div>
    
    <input type="submit" name="save" id="save" class="btn btn-success mt-2" value="Save Changes">

</form>
</div>