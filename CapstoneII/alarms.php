<?php include 'header.php'; ?> 

    <!-- Main content with alarm settings -->
    <main>
        <table>
            <tr>
                <td align="left" colspan="3">
                    <h1>Alarms</h1>
                    <p>Configure alarms for the sensor device below.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Conductivity Alarm</h2>
                    <form>
                    <table>
                        <tr>
                            <td><label for="conductivity-threshold">Threshold (μS/cm):</label></td>
                            <td><input type="number" id="conductivity-threshold" name="conductivity-threshold" min="0" max="5000" step="1" value="1000"></td>
                        </tr>
                        <tr>
                            <td><label for="conductivity-email">Email Address:</label></td>
                            <td><input type="email" id="conductivity-email" name="conductivity-email" required></td>
                        </tr>
                        <tr>
                            <td><button type="submit">Save</button></td>
                        </tr>
                    </table>
                    <!-- Conductivity alarm settings -->
                    </form>
                    
                </td>
                <td>
                    <!-- pH alarm settings -->
                    <h2>pH Alarm</h2>
                    <form>
                    <table>
                        <tr>
                            <td><label for="ph-threshold">Threshold:</label></td>
                            <td><input type="number" id="ph-threshold" name="ph-threshold" min="0" max="14" step="0.1" value="7.0"></td>
                        </tr>
                        <tr>
                            <td><label for="ph-email">Email Address:</label></td>
                            <td><input type="email" id="ph-email" name="ph-email" required></td>
                        </tr>
                        <tr>
                            <td><button type="submit">Save</button></td>
                        </tr>
                    </table>
                    </form>
                </td>
                <td>
                    <!-- Temperature alarm settings -->
                    <h2>Temperature Alarm</h2>
                    <form>
                    <table>
                        <tr>
                            <td><label for="temperature-threshold">Threshold (°C):</label></td>
                            <td><input type="number" id="temperature-threshold" name="temperature-threshold" min="0" max="100" step="0.1" value="30"></td>
                        </tr>
                        <tr>
                            <td><label for="temperature-email">Email Address:</label></td>
                            <td><input type="email" id="temperature-email" name="temperature-email" required></td>
                        </tr>
                        <tr>
                            <td> <button type="submit">Save</button></td>
                        </tr>
                    </table>
                    </form>
                </td>
            </tr>
        </table>
        

        

        
    </main>
</body>
</html>
