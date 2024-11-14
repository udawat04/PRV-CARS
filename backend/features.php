<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features</title>
</head>
<body>
    <form action="featuredata.php" method="POST" enctype="multipart/form-data" >
        <div class="category">
            <table border='5' align='center' cellspacing=0 cellpadding=10 class="table table-bordered">
                <tr>
                    <td colspan="5" align='center'> Features </td>
                </tr>
                <tr style="border:none;">
                    <td><input type="checkbox" name="a[]"  value="Power Steering">Power Steering</td>
                    <td><input type="checkbox" name="a[]" value="Power Window Front">Power Window Front</td>
                    <td><input type="checkbox" name="a[]"  value="Air Conditioner">Air Conditioner</td>
                    <td><input type="checkbox" name="a[]" value="Heater">Heater</td>
                    <td><input type="checkbox" name="a[]" value="Adjustable Head Lights">Adjustable Head Lights</td>
                </tr>
                <tr style="border:none;">
                    <td><input type="checkbox" name="a[]"  value="Fog Lights Rear">Fog Lights Rear</td>
                    <td><input type="checkbox" name="a[]"  value="Anti Lock Braking System">Anti Lock Braking System</td>
                    <td><input type="checkbox" name="a[]"  value="Central Locking">Central Locking</td>
                    <td><input type="checkbox" name="a[]"  value="Cd Player">Cd Player</td>
                    <td><input type="checkbox" name="a[]" value="Power Window Rear">Power Window Rear</td>
                </tr>
                <tr style="border:none;">
                    <td><input type="checkbox" name="a[]"  value="Keyless Entry">Keyless Entry</td>
                    <td><input type="checkbox" name="a[]" value="Trunk Light">Trunk Light</td>
                    <td><input type="checkbox" name="a[]"  value="Multifunction Steering Wheel">Multifunction Steering Wheel</td>
                    <td><input type="checkbox" name="a[]"  value="Cruise Control">Cruise Control</td>
                    <td><input type="checkbox" name="a[]"  value="Rear AC Vents">Rear AC Vents</td>
                </tr>
                <tr style="border:none;">
                    <td><input type="checkbox" name="a[]"  value="Cooled GloveBox">Cooled GloveBox</td>
                    <td><input type="checkbox" name="a[]"  value="Leather Steering Wheel">Leather Steering Wheel</td>
                    <td><input type="checkbox" name="a[]"  value="Sun Roof">Sun Roof</td>
                    <td><input type="checkbox" name="a[]"  value="Electric Folding Rear View Mirror">Electric Folding Rear View Mirror</td>
                    <td><input type="checkbox" name="a[]"  value="Anti Theft Alarm">Anti Theft Alarm</td>
                </tr>
                <tr>
                    <td colspan='5' align='center'> <button class="btn2">Submit</button></td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>