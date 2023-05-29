<?php include 'header.php'; ?>

    <!-- Main content with device information -->
    <main>
        <h1>Conductivity/PH/Temperature Sensor Device</h1>
        <p>Welcome to our sensor device that monitors conductivity, PH, and temperature levels. Our device is ideal for anyone who wants to monitor these levels in water, soil, or other substances.</p>

        <!-- Sensor readings -->
        <h2>Sensor Readings</h2>
        <div class="sensor-readings">
            <div class="sensor-reading">
                <h3>Conductivity</h3>
                <p class="reading-value">420 μS/cm</p>
                <p class="reading-time">Last updated: May 15, 2023 10:30 AM</p>
            </div>
            <div class="sensor-reading">
                <h3>pH</h3>
                <p class="reading-value">7.2</p>
                <p class="reading-time">Last updated: May 15, 2023 10:30 AM</p>
            </div>
            <div class="sensor-reading">
                <h3>Temperature</h3>
                <p class="reading-value">25.5°C</p>
                <p class="reading-time">Last updated: May 15, 2023 10:30 AM</p>
            </div>
        </div>

        <!-- Device status -->
        <h2>Device Status</h2>
        <div class="device-status">
            <p class="status-ok">Status: OK</p>
            <p>Last checked: May 15, 2023 10:30 AM</p>
        </div>

        <!-- Alerts -->
        <h2>Alerts</h2>
        <div class="alerts">
            <div class="alert">
                <p class="alert-type">High Temperature</p>
                <p class="alert-message">The temperature has exceeded 30°C</p>
                <p class="alert-time">May 14, 2023 11:45 PM</p>
            </div>
            <div class="alert">
                <p class="alert-type">Low PH</p>
                <p class="alert-message">The PH level has dropped below 6.5</p>
                <p class="alert-time">May 14, 2023 11:45 PM</p>
            </div>
        </div>

        <!-- Graphs -->
        <h2>Graphs</h2>
        <div class="graphs">
            <img src="conductivity-graph.png" alt="Conductivity Graph">
            <img src="ph-graph.png" alt="PH Graph">
            <img src="temperaturegraph.png" alt="Temperature Graph">
        </div>

    </main>
<?php include 'footer.php'; ?>
