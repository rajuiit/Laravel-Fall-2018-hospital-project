@extends('doctor.deshboard')

@section('title')
	Prescription
@endsection

@section('content-heading')
	Prescription
@endsection

@section('maincontent')	
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 3px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
select {
  font: 400 12px/1.3 sans-serif;
  appearance: none;
  color: black;
  border: 1px solid black;
  background-color: lightblue;
  line-height: 1;
  outline: 0;
  padding: 0.65em 0.75em 0.55em 0.25em;

  background-size: 1px 100%, 20px 22px, 20px 22px, 20px 100%;
  background-position: right 20px center, right bottom, right bottom, right bottom;   
}
input[type=text], select {
  width: 100%;
  padding: 8px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: orange;
  color:black;
  padding: 30px;
}
</style>

	<div class="container " style=" background-color: white;height: auto; color: black; width: auto;">
            
            <div class="col-md-12 bg-info" style="height: auto;" >

            	<div style="text-align: right;">
            		<img src="{{ asset('styles') }}/images/logo.png" alt="img" style="height: 100; width: 200px; float: left; margin-bottom: 15px; ">    	
            		<h1 style="font-weight: bold;">Digital Smart Helth Care System</h1>
            		<h2>Dr. Shamim Ahmed</h2>
            		<i style="font-size: 30px;">Graphics Designer</i>

            	</div>

            </div>
            
            
            
            <div class="col-md-5 bg-primary" style="height: 50px; font-size: 20px; padding-top: 10px;">Pesent Name:</div>
           	<div class="col-md-2 bg-warning"style="height: 50px;font-size: 20px; padding-top: 10px;">Age:</div>
            <div class="col-md-2 bg-primary"style="height: 50px;font-size: 20px; padding-top: 10px;">Sex:</div>
            <div class="col-md-3 bg-danger"style="height: 50px;font-size: 20px; padding-top: 10px;">Date:</div>

            {!! Form::open(['url'=>'/doctor/prescription','method'=>'post']) !!}

            <h2>{{ Session::get('massage2') }}</h2>

            <div class="col-md-3 bg-info" style="height: auto;"><h3>Test</h3>
                  
                  <table style="margin-top: 15px;">
                       <tr>
                             <th>Test No.</th>
                             <th>Test Name</th>
                       </tr>
                        <tr>
                             <td>1</td>
                              <td>
                                    <select>
                                      <option>Select</option>
                                    <option>Blood</option>
                                    <option>Urin</option>
                                    <option>Diabetics</option>
                                    <option>Sugar</option>
                                    <option>Presher</option>
                              </select>
                              </td>
                       </tr>
                       <tr>
                             <td>2</td>
                              <td>
                                    <select>
                                      <option>Select</option>
                                    <option>Blood</option>
                                    <option>Urin</option>
                                    <option>Diabetics</option>
                                    <option>Sugar</option>
                                    <option>Presher</option>
                              </select>
                              </td>
                       </tr>
                       <tr>
                             <td>3</td>
                              <td>
                                    <select>
                                      <option>Select</option>
                                    <option>Blood</option>
                                    <option>Urin</option>
                                    <option>Diabetics</option>
                                    <option>Sugar</option>
                                    <option>Presher</option>
                              </select>
                              </td>
                       </tr>
                       <tr>
                             <td>4</td>
                              <td>
                                    <select>
                                      <option>Select</option>
                                    <option>Blood</option>
                                    <option>Urin</option>
                                    <option>Diabetics</option>
                                    <option>Sugar</option>
                                    <option>Presher</option>
                              </select>
                              </td>
                       </tr>
                       <tr>
                             <td>5</td>
                              <td>
                                    <select>
                                      <option>Select</option>
                                    <option>Blood</option>
                                    <option>Urin</option>
                                    <option>Diabetics</option>
                                    <option>Sugar</option>
                                    <option>Presher</option>
                              </select>
                              </td>
                       </tr>
                       <tr>
                             <td>6</td>
                              <td>
                                    <select>
                                      <option>Select</option>
                                    <option>Blood</option>
                                    <option>Urin</option>
                                    <option>Diabetics</option>
                                    <option>Sugar</option>
                                    <option>Presher</option>
                              </select>
                              </td>

                       </tr>
                 
                  </table>
                  <input type="submit" name="submit" value="Send">      
            </div>
{!! Form::close() !!}
<div>
      
</div>
            {!! Form::open(['url'=>'/doctor/prescription','method'=>'post']) !!}

              <h2>{{ Session::get('massage1') }}</h2>
                  <div class="col-md-9 bg-success" style="height: auto;"><i style="font-size: 35px;">Rx</i>
                  
            	<table style="margin-top: 15px;">
            		<tr>
            			<th>Si.</th>
                              <th>Type</th>            
                              <th>Medicin</th>
            			<th>Dosage</th>
            			<th>Meal</th>
            			<th>Day</th>
            			<th>Instraction</th>
            		</tr>
            		<tr>
            			<td>1</td>
                              <td>
                                   <select name="type">
                                    <option>Select</option>
                                          <option value="tab" >Tab.</option>
                                          <option value="cap">Cap.</option>
                                          <option value="liq">Liq.</option>
                                          <option value="jel">Jel.</option>
                                          <option value="pot">Pot.</option>
                                    </select> 
                              </td>
            			<td>
            				<input type="text" name="medicin" placeholder="Enter medicin">
            			</td>
            			<td>
            				<select name="dosage">
                      <option>Select</option>
            					<option value="1">0+0+1</option>
            					<option value="2">0+1+0</option>
            					<option value="4">1+0+0</option>
            					<option value="6">1+1+0</option>
            					<option value="3">0+1+1</option>
            					<option value="5">1+0+1</option>
            					<option value="7">1+1+1</option>
            				</select>
            			</td>
            			<td>
            				<select name="meal">
                      <option>Select</option>
            					<option value="before">Before</option>
            					<option value="after">After</option>
            				</select>
            			</td>
            			<td>
            				<select name="day">
                      <option>Select</option>
                      <option value="1d">1 day</option>
                      <option value="2d">2 day</option>
                      <option value="3d">3 day</option>
                      <option value="4d">4 day</option>
                      <option value="1w">1 Week</option>
            					<option value="2w">2 Weeks</option>
            					<option value="15d">15 days</option>
            					<option value="3w">3 Weeks</option>
            					<option value="4w">4 Weeks</option>
            					<option value="1m">1 Manth</option>
            					<option value="1m15d">1 Manth 15 days</option>
            					<option value="2m">2 Manths</option>
            				</select>
            			</td>
            			<td>
            				<input type="text" name="instraction" placeholder="Enter instraction" style="width:100%">
            			</td>
            		</tr><tr>
            			<td>2</td>
                              <td>
                                   <select name="type">
                                    <option>Select</option>
                                          <option value="tab">Tab.</option>
                                          <option value="cap">Cap.</option>
                                          <option value="liq">Liq.</option>
                                          <option value="jel">Jel.</option>
                                          <option value="pot">Pot.</option>
                                    </select> 
                              </td>
            			<td>
            				<input type="text" name="medicin" placeholder="Enter medicin">
            			</td>
            			<td>
            				<select name="dosage">
                      <option>Select</option>
            					<option value="1">1+0+0</option>
            					<option value="1">0+1+0</option>
            					<option value="1">0+0+1</option>
            					<option value="1">1+1+0</option>
            					<option value="1">0+1+1</option>
            					<option value="1">1+0+1</option>
            					<option value="1">1+1+1</option>
            				</select>
            			</td>
            			<td>
            				<select name="meal">
                      <option>Select</option>
            					<option value="b">Before</option>
            					<option value="a">After</option>
            				</select>
            			</td>
            			<td>
            				<select name="day">
                      <option>Select</option>
            					<option value="1w">1 Week</option>
            					<option value="1w">2 Weeks</option>
            					<option value="1w">15 days</option>
            					<option value="1w">3 Weeks</option>
            					<option value="1w">4 Weeks</option>
            					<option value="1w">1 Manth</option>
            					<option value="1w">1 Manth 15 days</option>
            					<option value="1w">2 Manths</option>
            				</select>
            			</td>
            			<td>
            				<input type="text" name="instraction" placeholder="Enter instraction " style="width:100%">
            			</td>
            		</tr><tr>
            			<td>3</td>
                              <td>
                                   <select>
                                    <option>Select</option>
                                          <option>Tab.</option>
                                          <option>Cap.</option>
                                          <option>Liq.</option>
                                          <option>Jel.</option>
                                          <option>Pot.</option>
                                    </select> 
                              </td>
            			<td>
            				<input type="text" name="" placeholder="Enter ">
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1+0+0</option>
            					<option>0+1+0</option>
            					<option>0+0+1</option>
            					<option>1+1+0</option>
            					<option>0+1+1</option>
            					<option>1+0+1</option>
            					<option>1+1+1</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>Before</option>
            					<option>After</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1 Week</option>
            					<option>2 Weeks</option>
            					<option>15 days</option>
            					<option>3 Weeks</option>
            					<option>4 Weeks</option>
            					<option>1 Manth</option>
            					<option>1 Manth 15 days</option>
            					<option>2 Manths</option>
            				</select>
            			</td>
            			<td>
            				<input type="text" name="" placeholder="Enter " style="width:100%">
            			</td>
            		</tr><tr>
            			<td>4</td>
                              <td>
                                   <select>
                                    <option>Select</option>
                                          <option>Tab.</option>
                                          <option>Cap.</option>
                                          <option>Liq.</option>
                                          <option>Jel.</option>
                                          <option>Pot.</option>
                                    </select> 
                              </td>
            			<td>
            				<input type="text" name="" placeholder="Enter ">
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1+0+0</option>
            					<option>0+1+0</option>
            					<option>0+0+1</option>
            					<option>1+1+0</option>
            					<option>0+1+1</option>
            					<option>1+0+1</option>
            					<option>1+1+1</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>Before</option>
            					<option>After</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1 Week</option>
            					<option>2 Weeks</option>
            					<option>15 days</option>
            					<option>3 Weeks</option>
            					<option>4 Weeks</option>
            					<option>1 Manth</option>
            					<option>1 Manth 15 days</option>
            					<option>2 Manths</option>
            				</select>
            			</td>
            			<td>
            				<input type="text" name="" placeholder="Enter " style="width:100%">
            			</td>
            		</tr><tr>
            			<td>5</td>
                              <td>
                                   <select>
                                    <option>Select</option>
                                          <option>Tab.</option>
                                          <option>Cap.</option>
                                          <option>Liq.</option>
                                          <option>Jel.</option>
                                          <option>Pot.</option>
                                    </select> 
                              </td>
            			<td>
            				<input type="text" name="" placeholder="Enter ">
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1+0+0</option>
            					<option>0+1+0</option>
            					<option>0+0+1</option>
            					<option>1+1+0</option>
            					<option>0+1+1</option>
            					<option>1+0+1</option>
            					<option>1+1+1</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>Before</option>
            					<option>After</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1 Week</option>
            					<option>2 Weeks</option>
            					<option>15 days</option>
            					<option>3 Weeks</option>
            					<option>4 Weeks</option>
            					<option>1 Manth</option>
            					<option>1 Manth 15 days</option>
            					<option>2 Manths</option>
            				</select>
            			</td>
            			<td>
            				<input type="text" name="" placeholder="Enter " style="width:100%">
            			</td>
            		</tr><tr>
            			<td>6</td>
                              <td>
                                   <select>
                                    <option>Select</option>
                                          <option>Tab.</option>
                                          <option>Cap.</option>
                                          <option>Liq.</option>
                                          <option>Jel.</option>
                                          <option>Pot.</option>
                                    </select> 
                              </td>
            			<td>
            				<input type="text" name="" placeholder="Enter ">
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1+0+0</option>
            					<option>0+1+0</option>
            					<option>0+0+1</option>
            					<option>1+1+0</option>
            					<option>0+1+1</option>
            					<option>1+0+1</option>
            					<option>1+1+1</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>Before</option>
            					<option>After</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1 Week</option>
            					<option>2 Weeks</option>
            					<option>15 days</option>
            					<option>3 Weeks</option>
            					<option>4 Weeks</option>
            					<option>1 Manth</option>
            					<option>1 Manth 15 days</option>
            					<option>2 Manths</option>
            				</select>
            			</td>
            			<td>
            				<input type="text" name="" placeholder="Enter " style="width:100%">
            			</td>
            		</tr><tr>
            			<td>7</td>
                              <td>
                                   <select>
                                    <option>Select</option>
                                          <option>Tab.</option>
                                          <option>Cap.</option>
                                          <option>Liq.</option>
                                          <option>Jel.</option>
                                          <option>Pot.</option>
                                    </select> 
                              </td>
            			<td>
            				<input type="text" name="" placeholder="Enter ">
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1+0+0</option>
            					<option>0+1+0</option>
            					<option>0+0+1</option>
            					<option>1+1+0</option>
            					<option>0+1+1</option>
            					<option>1+0+1</option>
            					<option>1+1+1</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>Before</option>
            					<option>After</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1 Week</option>
            					<option>2 Weeks</option>
            					<option>15 days</option>
            					<option>3 Weeks</option>
            					<option>4 Weeks</option>
            					<option>1 Manth</option>
            					<option>1 Manth 15 days</option>
            					<option>2 Manths</option>
            				</select>
            			</td>
            			<td>
            				<input type="text" name="" placeholder="Enter " style="width:100%">
            			</td>
            		</tr><tr>
            			<td>8</td>
                              <td>
                                   <select>
                                    <option>Select</option>
                                          <option>Tab.</option>
                                          <option>Cap.</option>
                                          <option>Liq.</option>
                                          <option>Jel.</option>
                                          <option>Pot.</option>
                                    </select> 
                              </td>
            			<td>
            				<input type="text" name="" placeholder="Enter ">
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1+0+0</option>
            					<option>0+1+0</option>
            					<option>0+0+1</option>
            					<option>1+1+0</option>
            					<option>0+1+1</option>
            					<option>1+0+1</option>
            					<option>1+1+1</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>Before</option>
            					<option>After</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1 Week</option>
            					<option>2 Weeks</option>
            					<option>15 days</option>
            					<option>3 Weeks</option>
            					<option>4 Weeks</option>
            					<option>1 Manth</option>
            					<option>1 Manth 15 days</option>
            					<option>2 Manths</option>
            				</select>
            			</td>
            			<td>
            				<input type="text" name="" placeholder="Enter " style="width:100%">
            			</td>
            		</tr><tr>
            			<td>9</td>
                              <td>
                                   <select>
                                    <option>Select</option>
                                          <option>Tab.</option>
                                          <option>Cap.</option>
                                          <option>Liq.</option>
                                          <option>Jel.</option>
                                          <option>Pot.</option>
                                    </select> 
                              </td>
            			<td>
            				<input type="text" name="" placeholder="Enter ">
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1+0+0</option>
            					<option>0+1+0</option>
            					<option>0+0+1</option>
            					<option>1+1+0</option>
            					<option>0+1+1</option>
            					<option>1+0+1</option>
            					<option>1+1+1</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>Before</option>
            					<option>After</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1 Week</option>
            					<option>2 Weeks</option>
            					<option>15 days</option>
            					<option>3 Weeks</option>
            					<option>4 Weeks</option>
            					<option>1 Manth</option>
            					<option>1 Manth 15 days</option>
            					<option>2 Manths</option>
            				</select>
            			</td>
            			<td>
            				<input type="text" name="" placeholder="Enter " style="width:100%">
            			</td>
            		</tr><tr>
            			<td>10</td>
                              <td>
                                   <select>
                                    <option>Select</option>
                                          <option>Tab.</option>
                                          <option>Cap.</option>
                                          <option>Liq.</option>
                                          <option>Jel.</option>
                                          <option>Pot.</option>
                                    </select> 
                              </td>
            			<td>
            				<input type="text" name="" placeholder="Enter ">
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1+0+0</option>
            					<option>0+1+0</option>
            					<option>0+0+1</option>
            					<option>1+1+0</option>
            					<option>0+1+1</option>
            					<option>1+0+1</option>
            					<option>1+1+1</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>Before</option>
            					<option>After</option>
            				</select>
            			</td>
            			<td>
            				<select>
                      <option>Select</option>
            					<option>1 Week</option>
            					<option>2 Weeks</option>
            					<option>15 days</option>
            					<option>3 Weeks</option>
            					<option>4 Weeks</option>
            					<option>1 Manth</option>
            					<option>1 Manth 15 days</option>
            					<option>2 Manths</option>
            				</select>
            			</td>
            			<td>
            				<input type="text" name="" placeholder="Enter " style="width:100%">
            			</td>
            		</tr>
                        
            	</table>
                  <input type="submit" name="submit" value="Confirm">
            </div>
            {!! Form::close() !!}
            
            <div class="col-md-12 bg-primary" style="height: 50px; text-align:center;font-size: 20px; padding-top: 20px;">
                  Digital Smart Health Care system@group17
            </div>
            
      
            
        </div>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

@endsection