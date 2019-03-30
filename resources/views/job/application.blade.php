@extends('layout.master')
    
@section('content')

@push('topscript')
<style type="text/css">
      .white-card {
        background: #fff;
        width: 100%;
        display: block;
        min-height: 200px;
        padding: 20px;
      }
    </style>
@endpush

{{-- @include('partials.content-divider') --}}


@section('center-content')
<div class="white-card">
<form action="//submit.form" id="EmploymentApplication100" method="post" onsubmit="return ValidateForm(this);">



<!-- Services -->
<div class="innerPage-section" style="margin-top:400px;">
	<div class="container">
		<div class="row">
        <h1>Create your profile & let the right recruiter find you.</h1>
         <div id="pnlShow">
	
           
            <div id="content1-middle">
                <div class="content1-middle-left">
                    <table width="100%" style="margin-bottom: 20px">
                        <tr>
                            <td colspan="2" style="height: 33px;">
                                <h3>
                                    <b>Login Details:</b>
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                <span style="color: Red;">* </span>Mobile No :<br /><span style="font-size:10px; color:Red;"></span>
                            </td>
                            <td style="width: 65%;">
                                <div id="UpdatePanel1">
		
                                        <input name="txtEmailId" type="text" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;txtEmailId\&#39;,\&#39;\&#39;)&#39;, 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="txtEmailId" style="width:250px;" />
                                        <span id="RequiredFieldValidator1" style="display:inline-block;color:#FF3300;border-style:None;font-weight:bold;font-style:normal;display:none;">Mobile No.</span>&nbsp;
                                       
                                             <span id="RegularExpressionValidator2" InitialValue="Mobile" style="display:inline-block;color:#FF3300;border-style:None;font-weight:bold;font-style:normal;display:none;">Numeric digits only.</span>
                                <span id="RegularExpressionValidator3" style="color:Red;font-weight:bold;display:none;">Do not go beyond 10 digits.</span>
                                        
                                    
	</div>
                            </td>
                        </tr>
                  
                              
                            </td>
                        </tr>
                    </table>
                    <table width="100%" style="margin-bottom: 20px">
                        <tr>
                            <td colspan="2" style="height: 33px;">
                                <h3>
                                    <b>Personal Details:</b>
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                <span style="color: Red;">* </span>First Name :
                            </td>
                            <td style="width: 65%;">
                                <input name="txtFName" type="text" id="txtFName" style="width:250px;" />
                                <span id="RequiredFieldValidator4" style="display:inline-block;color:#FF3300;border-style:None;font-weight:bold;font-style:normal;display:none;">First name</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                <span style="color: Red;">* </span>Last Name :
                            </td>
                            <td style="width: 65%;">
                                <input name="txtLName" type="text" id="txtLName" style="width:250px;" />
                                <span id="RequiredFieldValidator5" style="display:inline-block;color:#FF3300;border-style:None;font-weight:bold;font-style:normal;display:none;">Last name</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div id="UpdatePanel2">
		
                                        <table width="100%">
                                            <tr style="min-height: 30px;">
                                                <td class="content1-middle-left-content" style="width: 35%;">
                                                    <span style="color: Red;">* </span>State :
                                                </td>
                                                <td style="width: 65%;">
                                                    <select name="ddlState" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ddlState\&#39;,\&#39;\&#39;)&#39;, 0)" id="ddlState" style="width:250px;">
			<option selected="selected" value="State">State</option>
			<option value="an">Andaman Nicobar</option>
			<option value="ap">Andhra Pradesh</option>
			<option value="ar">Arunachal Pradesh</option>
			<option value="as">Assam</option>
			<option value="St40">Banglore</option>
			<option value="br">Bihar</option>
			<option value="cg">Chandigarah</option>
			<option value="St39">Chennai</option>
			<option value="ch">Chhattisgarh</option>
			<option value="dn">Dadra Nagar Haveli</option>
			<option value="dd">Daman Diu</option>
			<option value="dl">Delhi</option>
			<option value="ga">Goa</option>
			<option value="gj">Gujrat</option>
			<option value="hr">Haryana</option>
			<option value="hp">Himachal Pradesh</option>
			<option value="jr">Jharkhand</option>
			<option value="kr">Karnataka</option>
			<option value="ka">Kerala</option>
			<option value="ld">Lakshadweep</option>
			<option value="mp">Madhya Pradesh</option>
			<option value="mh">Maharashtra</option>
			<option value="mn">Manipur</option>
			<option value="ml">Meghalaya</option>
			<option value="mz">Mizoram</option>
			<option value="nl">Nagaland</option>
			<option value="or">Orissa</option>
			<option value="pn">Pondicherry</option>
			<option value="pb">Punjab</option>
			<option value="rj">Rajasthan</option>
			<option value="sk">Sikkim</option>
			<option value="tn">Tamilnadu</option>
			<option value="tr">Tripura</option>
			<option value="up">Uttar Pradesh</option>
			<option value="ut">Uttaranchal</option>
			<option value="wb">West Bengal</option>

		</select>
                                                    <span id="RequiredFieldValidator6" style="display:inline-block;color:#FF3300;border-style:None;font-weight:bold;font-style:normal;display:none;">State</span>
                                                </td>
                                            </tr>
                                            <tr style="min-height: 30px;">
                                                <td class="content1-middle-left-content" style="width: 35%;">
                                                    <span style="color: Red;">* </span>City :
                                                </td>
                                                <td style="width: 65%;">
                                                    <select name="ddlCity" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ddlCity\&#39;,\&#39;\&#39;)&#39;, 0)" id="ddlCity" style="width:250px;">

		</select>
                                                    
                                                    <span id="RequiredFieldValidator7" style="display:inline-block;color:#FF3300;border-style:None;font-weight:bold;font-style:normal;display:none;">City</span>
                                                </td>
                                            </tr>
                                        </table>
                                    
	</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                Email :<i style="color: Gray; font-size: 10px;">(Optional)</i>
                            </td>
                            <td style="width: 65%;">
                                <input name="txtMobile" type="text" id="txtMobile" style="width:250px;" />
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                <span style="color: Red;">* </span>Gender :
                            </td>
                            <td style="width: 65%;">
                                <div style="float: left;">
                                    <table id="rdbGender" style="color:Black;width:200px;">
		<tr>
			<td><input id="rdbGender_0" type="radio" name="rdbGender" value="Male" checked="checked" /><label for="rdbGender_0">Male</label></td><td><input id="rdbGender_1" type="radio" name="rdbGender" value="Female" /><label for="rdbGender_1">Female</label></td>
		</tr>
	</table>
                                </div>
                                <div style="float: left;">
                                    <span id="RequiredFieldValidator9" style="display:inline-block;color:#FF3300;border-style:None;font-weight:bold;font-style:normal;display:none;">Gender</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                <span style="color: Red;">* </span>Date of Birth
                            </td>
                            <td style="width: 65%;">
                                <select name="ddlDate1" id="ddlDate1" style="width:85px;">
		<option value="Date">Date</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>

	</select>
                                <select name="ddlMonth1" id="ddlMonth1" style="width:85px;">
		<option value="Month">Month</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>

	</select>
                                <select name="ddlYear1" id="ddlYear1" style="width:85px;">
		<option value="Year">Year</option>
		<option value="1950">1950</option>
		<option value="1951">1951</option>
		<option value="1952">1952</option>
		<option value="1953">1953</option>
		<option value="1954">1954</option>
		<option value="1955">1955</option>
		<option value="1956">1956</option>
		<option value="1957">1957</option>
		<option value="1958">1958</option>
		<option value="1959">1959</option>
		<option value="1960">1960</option>
		<option value="1961">1961</option>
		<option value="1962">1962</option>
		<option value="1963">1963</option>
		<option value="1964">1964</option>
		<option value="1965">1965</option>
		<option value="1966">1966</option>
		<option value="1967">1967</option>
		<option value="1968">1968</option>
		<option value="1969">1969</option>
		<option value="1970">1970</option>
		<option value="1971">1971</option>
		<option value="1972">1972</option>
		<option value="1973">1973</option>
		<option value="1974">1974</option>
		<option value="1975">1975</option>
		<option value="1976">1976</option>
		<option value="1977">1977</option>
		<option value="1978">1978</option>
		<option value="1979">1979</option>
		<option value="1980">1980</option>
		<option value="1981">1981</option>
		<option value="1982">1982</option>
		<option value="1983">1983</option>
		<option value="1984">1984</option>
		<option value="1985">1985</option>
		<option value="1986">1986</option>
		<option value="1987">1987</option>
		<option value="1988">1988</option>
		<option value="1989">1989</option>
		<option value="1990">1990</option>
		<option value="1991">1991</option>
		<option value="1992">1992</option>
		<option value="1993">1993</option>
		<option value="1994">1994</option>
		<option value="1995">1995</option>
		<option value="1996">1996</option>
		<option value="1997">1997</option>
		<option value="1998">1998</option>
		<option value="1999">1999</option>
		<option value="2000">2000</option>
		<option value="2001">2001</option>
		<option value="2002">2002</option>
		<option value="2003">2003</option>
		<option value="2004">2004</option>
		<option value="2005">2005</option>
		<option value="2006">2006</option>
		<option value="2007">2007</option>
		<option value="2008">2008</option>
		<option value="2009">2009</option>
		<option value="2010">2010</option>

	</select>
                                <span id="RequiredFieldValidator11" style="display:inline-block;color:#FF3300;border-style:None;font-weight:bold;font-style:normal;display:none;">Date</span>&nbsp;
                                <span id="RequiredFieldValidator12" style="display:inline-block;color:#FF3300;border-style:None;font-weight:bold;font-style:normal;display:none;">Month</span>&nbsp;
                                <span id="RequiredFieldValidator13" style="display:inline-block;color:#FF3300;border-style:None;font-weight:bold;font-style:normal;display:none;">Year</span>
                            </td>
                        </tr>
                    </table>
                    <table width="100%">
                        <tr>
                            <td colspan="2" style="height: 33px; margin-bottom: 10px">
                                <h3>
                                    <b>Work Experience:</b>
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" colspan="2" style="color: Black;">
                                <b>Experience Summary </b>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                Total Experience :
                            </td>
                            <td style="width: 65%;">
                                <select name="ddlYear" id="ddlYear" style="width:125px;">
		<option value="Year">Year</option>
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="30+">30+</option>
		<option value="31">31</option>
		<option value="32">32</option>
		<option value="33">33</option>
		<option value="34">34</option>
		<option value="35">35</option>
		<option value="36">36</option>
		<option value="37">37</option>
		<option value="38">38</option>
		<option value="39">39</option>
		<option value="40">40</option>
		<option value="41">41</option>
		<option value="42">42</option>
		<option value="43">43</option>
		<option value="44">44</option>
		<option value="45">45</option>
		<option value="46">46</option>
		<option value="47">47</option>
		<option value="48">48</option>
		<option value="49">49</option>
		<option value="50">50</option>

	</select>
                                <select name="ddlMonth" id="ddlMonth" style="width:125px;">
		<option value="Month">Month</option>
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>

	</select>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                Current CTC :
                            </td>
                            <td style="width: 65%;">
                                <select name="ddlSalaryLacs" id="ddlSalaryLacs" style="width:125px;">
		<option value="Lacs">Lacs</option>
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		<option value="32">32</option>
		<option value="33">33</option>
		<option value="34">34</option>
		<option value="35">35</option>
		<option value="36">36</option>
		<option value="37">37</option>
		<option value="38">38</option>
		<option value="39">39</option>
		<option value="40">40</option>
		<option value="41">41</option>
		<option value="42">42</option>
		<option value="43">43</option>
		<option value="44">44</option>
		<option value="45">45</option>
		<option value="46">46</option>
		<option value="47">47</option>
		<option value="48">48</option>
		<option value="49">49</option>
		<option value="50">50</option>
		<option value="51">51</option>
		<option value="52">52</option>
		<option value="53">53</option>
		<option value="54">54</option>
		<option value="55">55</option>
		<option value="56">56</option>
		<option value="57">57</option>
		<option value="58">58</option>
		<option value="59">59</option>
		<option value="60">60</option>
		<option value="61">61</option>
		<option value="62">62</option>
		<option value="63">63</option>
		<option value="64">64</option>
		<option value="65">65</option>
		<option value="66">66</option>
		<option value="67">67</option>
		<option value="68">68</option>
		<option value="69">69</option>
		<option value="70">70</option>
		<option value="71">71</option>
		<option value="72">72</option>
		<option value="73">73</option>
		<option value="74">74</option>
		<option value="75">75</option>
		<option value="76">76</option>
		<option value="77">77</option>
		<option value="78">78</option>
		<option value="79">79</option>
		<option value="80">80</option>
		<option value="81">81</option>
		<option value="82">82</option>
		<option value="83">83</option>
		<option value="84">84</option>
		<option value="85">85</option>
		<option value="86">86</option>
		<option value="87">87</option>
		<option value="88">88</option>
		<option value="89">89</option>
		<option value="90">90</option>
		<option value="91">91</option>
		<option value="92">92</option>
		<option value="93">93</option>
		<option value="94">94</option>
		<option value="95">95</option>
		<option value="96">96</option>
		<option value="97">97</option>
		<option value="98">98</option>
		<option value="99">99</option>
		<option value="100">100</option>

	</select>
                                <select name="ddlSalaryThousands" id="ddlSalaryThousands" style="width:125px;">
		<option value="Thousands">Thousands</option>
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		<option value="32">32</option>
		<option value="33">33</option>
		<option value="34">34</option>
		<option value="35">35</option>
		<option value="36">36</option>
		<option value="37">37</option>
		<option value="38">38</option>
		<option value="39">39</option>
		<option value="40">40</option>
		<option value="41">41</option>
		<option value="42">42</option>
		<option value="43">43</option>
		<option value="44">44</option>
		<option value="45">45</option>
		<option value="46">46</option>
		<option value="47">47</option>
		<option value="48">48</option>
		<option value="49">49</option>
		<option value="50">50</option>
		<option value="51">51</option>
		<option value="52">52</option>
		<option value="53">53</option>
		<option value="54">54</option>
		<option value="55">55</option>
		<option value="56">56</option>
		<option value="57">57</option>
		<option value="58">58</option>
		<option value="59">59</option>
		<option value="60">60</option>
		<option value="61">61</option>
		<option value="62">62</option>
		<option value="63">63</option>
		<option value="64">64</option>
		<option value="65">65</option>
		<option value="66">66</option>
		<option value="67">67</option>
		<option value="68">68</option>
		<option value="69">69</option>
		<option value="70">70</option>
		<option value="71">71</option>
		<option value="72">72</option>
		<option value="73">73</option>
		<option value="74">74</option>
		<option value="75">75</option>
		<option value="76">76</option>
		<option value="77">77</option>
		<option value="78">78</option>
		<option value="79">79</option>
		<option value="80">80</option>
		<option value="81">81</option>
		<option value="82">82</option>
		<option value="83">83</option>
		<option value="84">84</option>
		<option value="85">85</option>
		<option value="86">86</option>
		<option value="87">87</option>
		<option value="88">88</option>
		<option value="89">89</option>
		<option value="90">90</option>
		<option value="91">91</option>
		<option value="92">92</option>
		<option value="93">93</option>
		<option value="94">94</option>
		<option value="95">95</option>
		<option value="96">96</option>
		<option value="97">97</option>
		<option value="98">98</option>
		<option value="99">99</option>

	</select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" colspan="2" style="color: Black;">
                                <b>Current / Latest Job Details</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                Job Title :
                            </td>
                            <td style="width: 65%;">
                                <input name="txtJobTitle" type="text" id="txtJobTitle" style="width:250px;" />
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                Company Name :
                            </td>
                            <td style="width: 65%;">
                                <input name="txtCompName" type="text" id="txtCompName" style="width:250px;" />
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" colspan="2">
                                <div id="UpdatePanel3">
		
                                        <table width="100%">
                                            <tr>
                                                <td class="content1-middle-left-content" style="width: 35%;">
                                                    <span style="color: Red;">* </span>Industry :
                                                </td>
                                                <td style="width: 65%; text-align: left;">
                                                    <select name="ddlIndustry" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ddlIndustry\&#39;,\&#39;\&#39;)&#39;, 0)" id="ddlIndustry" style="width:250px;">
			<option selected="selected" value="Industry">Industry</option>
			<option value="Ind4">Accounting / Finance</option>
			<option value="Ind60">Administration</option>
			<option value="Ind5">Advertising / PR/ MR / Event Management</option>
			<option value="Ind61">Agency</option>
			<option value="Ind6">Agriculture / Dairy/ Fertilizer/Pesticides</option>
			<option value="Ind9">Airlines/Travel/Transportation/Logistic/Car rental</option>
			<option value="Ind7">Animation / Gaming</option>
			<option value="Ind74">Any Industry</option>
			<option value="Ind8">Architecture / Interior Design</option>
			<option value="Ind3">Automobile / Auto Alliance / Auto Components</option>
			<option value="Ind10">Banking / Financial Services / Broking</option>
			<option value="Ind73">Beauty &amp; Wellness/SPA</option>
			<option value="Ind2">BPO/ Call Centre/ ITES</option>
			<option value="Ind11">Brewery / Distillery</option>
			<option value="Ind12">Ceramics / Sanitary ware</option>
			<option value="Ind13">Chemicals/Petrochemicals/Tyres/Glass/Plastic/rubbe</option>
			<option value="Ind14">Construction / Engineering / Cement / Metals/ Stee</option>
			<option value="Ind15">Consumer/durables/electricals/Switchgears</option>
			<option value="Ind16">Courier / Transportation / Freight / Warehousing</option>
			<option value="Ind17">Education / Teaching / Training</option>
			<option value="Ind18">Electricals / Switchgears</option>
			<option value="Ind62">Engineering/oil &amp; gas/Power/Energy</option>
			<option value="Ind63">Entertainment/Media</option>
			<option value="Ind64">Event Management/Promotional event</option>
			<option value="Ind19">Export / Import</option>
			<option value="Ind20">Facility Management</option>
			<option value="Ind21">Fertilizers / Pesticides</option>
			<option value="Ind22">FMCG / Foods / Beverage</option>
			<option value="Ind23">Food Processing</option>
			<option value="Ind65">Footwear</option>
			<option value="Ind24">Fresher / Trainee / Entry Level</option>
			<option value="Ind25">Gems / Jewellery</option>
			<option value="Ind66">General</option>
			<option value="Ind26">Glass / Glassware</option>
			<option value="Ind27">Government / Defence</option>
			<option value="Ind28">Heat Ventilation / Air Conditioning</option>
			<option value="Ind67">Hospitality/Hotel Management</option>
			<option value="Ind68">Household</option>
			<option value="Ind29">Industrial Products / Heavy Machinery</option>
			<option value="Ind69">Infrastructure/Construction</option>
			<option value="Ind30">Insurance</option>
			<option value="Ind36">Internet / Ecommerce</option>
			<option value="Ind31">Iron and Steel</option>
			<option value="Ind1">IT Software/ Software Services</option>
			<option value="Ind32">IT-Hardware &amp; Networking</option>
			<option value="Ind33">KPO / Research / Analytics</option>
			<option value="Ind34">Legal</option>
			<option value="Ind70">Manufacturing</option>
			<option value="Ind35">Media / Entertainment / Internet</option>
			<option value="Ind37">Medical / Healthcare / Hospitals</option>
			<option value="Ind38">Mining / Quarrying</option>
			<option value="Ind39">NGO / Social Services / Regulators / Industry Asso</option>
			<option value="Ind40">Office Equipment / Automation</option>
			<option value="Ind41">Oil and Gas / Energy / Power / Infrastructure</option>
			<option value="Ind59">Other</option>
			<option value="Ind43">Pharma / Biotech / Clinical Research</option>
			<option value="Ind44">Printing / Packaging</option>
			<option value="Ind45">Publishing</option>
			<option value="Ind42">Pulp and Paper</option>
			<option value="Ind46">Real Estate / Property</option>
			<option value="Ind47">Recruitment / Staffing</option>
			<option value="Ind48">Retail / Wholesale/ Shopkeeper</option>
			<option value="Ind71">Sales Marketing</option>
			<option value="Ind49">Security / Law Enforcement</option>
			<option value="Ind50">Semiconductors / Electronics</option>
			<option value="Ind51">Shipping / Marine</option>
			<option value="Ind72">Soft Skills/Personality Development</option>
			<option value="Ind52">Strategy / Management Consulting Firms</option>
			<option value="Ind53">Telcom / ISP</option>
			<option value="Ind54">Textiles / Garments / Accessories</option>
			<option value="Ind55">Travel / Hotels / Restaurants / Airlines / Railway</option>
			<option value="Ind56">Tyres</option>
			<option value="Ind57">Water Treatment / Waste Management</option>
			<option value="Ind58">Wellness / Fitness / Sports</option>

		</select>
                                                    <span id="RequiredFieldValidator15" style="display:inline-block;color:#FF3300;border-style:None;font-weight:bold;font-style:normal;display:none;">Industry</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content1-middle-left-content" style="width: 35%;">
                                                    Functional Area :
                                                </td>
                                                <td style="width: 65%; text-align: left;">
                                                    <select name="ddlFunArea" id="ddlFunArea" style="width:250px;">

		</select>
                                                </td>
                                            </tr>
                                        </table>
                                    
	</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                Duration in this job :
                            </td>
                            <td style="width: 65%;">
                                <select name="ddlYearDur" id="ddlYearDur" style="width:124px;">
		<option value="Year">Year</option>
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>

	</select>
                                <select name="ddlMonthDur" id="ddlMonthDur" style="width:124px;">
		<option value="Month">Month</option>
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>

	</select>
                            </td>
                        </tr>
                    </table>
                    <table width="100%">
                        <tr>
                            <td colspan="2" style="height: 33px; margin-bottom: 10px">
                                <h3>
                                    <b>Educational Details:</b>
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                <span style="color: Red;">* </span>Basic / Graduation :
                            </td>
                            <td style="width: 65%;">
                                <select name="ddlBasicEdu" id="ddlBasicEdu" style="width:250px;">
		<option value="Basic/Graduation">Basic/Graduation</option>
		<option value="Gra21">10th (Higher Secondary)</option>
		<option value="Gra22">12th (Senior Secondary)</option>
		<option value="BA">B.A</option>
		<option value="BARCH">B.Arch</option>
		<option value="BBA">B.B.A</option>
		<option value="BCA">B.C.A</option>
		<option value="BCOM">B.Com</option>
		<option value="BDS">B.D.S</option>
		<option value="BED">B.Ed</option>
		<option value="BHM">B.H.M</option>
		<option value="Gra28">B.Lib.</option>
		<option value="Gra27">B.Pd</option>
		<option value="BPHARMA">B.Pharma</option>
		<option value="BSC">B.Sc</option>
		<option value="BE">B.Tech/B.E</option>
		<option value="BVSC">B.V.S.C</option>
		<option value="DbCourse_Code">DbCourse_Name</option>
		<option value="DIPLOMA">Dilpoma</option>
		<option value="Gra31">Fashion Design</option>
		<option value="Gra18">Graduation (Any)</option>
		<option value="Gra29">ITI</option>
		<option value="LLB">L.L.B</option>
		<option value="MBBS">M.B.B.S</option>
		<option value="Gra23">Mass Com.</option>
		<option value="NPG">Not Pursuing Graduation</option>
		<option value="Gra25">NTT</option>
		<option value="OTH">Others</option>
		<option value="Gra24">PGT</option>
		<option value="Gra26">PRT</option>

	</select>
                                <span id="RequiredFieldValidator14" style="display:inline-block;color:#FF3300;border-style:None;font-weight:bold;font-style:normal;display:none;">Basic/Graduation</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                Post Graduation :
                            </td>
                            <td style="width: 65%;">
                                <select name="ddlMasterEdu" id="ddlMasterEdu" style="width:250px;">
		<option value="Post Graduation">Post Graduation</option>
		<option value="CA">C.A</option>
		<option value="CS">C.S</option>
		<option value="DbCourse_Code">DbCourse_Name</option>
		<option value="ICWA">I.C.W.A</option>
		<option value="INTPG">Integrated PG</option>
		<option value="Pg23">Journalism</option>
		<option value="LLM">L.L.M</option>
		<option value="MA">M.A</option>
		<option value="MARCH">M.Arch</option>
		<option value="MBA">M.B.A/PGDM</option>
		<option value="MCA">M.C.A</option>
		<option value="MCM">M.C.M</option>
		<option value="MCOM">M.Com</option>
		<option value="MED">M.Ed</option>
		<option value="Pg24">M.Lib,</option>
		<option value="MPHARMA">M.Pharma</option>
		<option value="MS">M.S</option>
		<option value="MSC">M.Sc</option>
		<option value="MTECH">M.Tech</option>
		<option value="MVSC">M.V.S.C</option>
		<option value="OTH">Other</option>
		<option value="PGD">PG Diploma</option>
		<option value="Pg20">Post Graduation (Any)</option>

	</select>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                Doctorate / Phd :
                            </td>
                            <td style="width: 65%;">
                                <select name="ddlDoctEdu" id="ddlDoctEdu" style="width:250px;">
		<option value="Doctorate">Doctorate</option>
		<option value="DbCourse_Code">DbCourse_Name</option>
		<option value="PHD">Ph.d/Doctorate</option>
		<option value="MPHIL">MPHIL</option>
		<option value="OTH">Other</option>

	</select>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                Certified Course(s):
                            </td>
                            <td style="width: 65%;">
                                <textarea name="txtCertificate1" rows="2" cols="20" id="txtCertificate1" style="height:80px;width:250px;">
</textarea>
                            </td>
                        </tr>
                    </table>
                    <table width="100%">
                        <tr>
                            <td colspan="2" style="height: 33px; margin-bottom: 10px">
                                <h3>
                                    <b>Upload Resume:</b>
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%; margin-bottom: 10px">
                                Upload Resume :
                            </td>
                            <td style="width: 65%;">
                                <input type="file" name="FileUpload1" id="FileUpload1" style="width:250px;" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 33px;">
                                <h3>
                                    <b>Area of Interest:</b>
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td class="content1-middle-left-content" style="width: 35%;">
                                Interested In :
                            </td>
                            <td style="width: 65%;">
                                <div id="UpdatePanel4">
		
                                        <span style="color:Black;"><input id="chkTraining" type="checkbox" name="chkTraining" /><label for="chkTraining">Training</label></span>
                                        <span style="color:Black;"><input id="chkPlacement" type="checkbox" name="chkPlacement" /><label for="chkPlacement">Placement</label></span>
                                        <span style="color:Black;"><input id="chkAssessment" type="checkbox" name="chkAssessment" /><label for="chkAssessment">Assessment</label></span>
                                        <span style="color:Black;"><input id="chkAll" type="checkbox" name="chkAll" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;chkAll\&#39;,\&#39;\&#39;)&#39;, 0)" /><label for="chkAll">All</label></span>
                                    
	</div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2">
                                <input type="submit" name="imgbtnCreateLogin" value="Create my account" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;imgbtnCreateLogin&quot;, &quot;&quot;, true, &quot;g&quot;, &quot;&quot;, false, false))" id="imgbtnCreateLogin" class="Lbutton" style="border-width:0px;margin-top: 20px" />
                                <input type="hidden" name="HiddenField1" id="HiddenField1" />
                                <input type="hidden" name="HiddenField2" id="HiddenField2" />
                                <input type="hidden" name="HiddenField3" id="HiddenField3" />
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        
</div>
        
        
        </div>
    </div>
</div>
<!-- Services -->

</form>
</div>
@endsection
@section('right-content')
	@include('partials.sidebar-search-job')
@endsection

@endsection