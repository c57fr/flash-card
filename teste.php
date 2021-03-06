<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Expandable elements</title>
<style type="text/css">
#expand-btn {
    margin: 0 3px;
    display: inline-block;
    font: 12px / 13px "Lucida Grande", sans-serif;
    text-shadow: rgba(255, 255, 255, 0.4) 0 1px;
    padding: 3px 6px;
    border: 1px solid rgba(0, 0, 0, 0.6);
    background-color: #969696;
    cursor: default;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    -moz-box-shadow: rgba(255, 255, 255, 0.4) 0 1px, inset 0 20px 20px -10px white;
    -webkit-box-shadow: rgba(255, 255, 255, 0.4) 0 1px, inset 0 20px 20px -10px white;
    box-shadow: rgba(255, 255, 255, 0.4) 0 1px, inset 0 20px 20px -10px white;
}

#isexpanded:checked ~ #expand-btn, #isexpanded:checked ~ * #expand-btn {
    background: #B5B5B5;
    -moz-box-shadow: inset rgba(0, 0, 0, 0.4) 0 -5px 12px, inset rgba(0, 0, 0, 1) 0 1px 3px, rgba(255, 255, 255, 0.4) 0 1px;
    -webkit-box-shadow: inset rgba(0, 0, 0, 0.4) 0 -5px 12px, inset rgba(0, 0, 0, 1) 0 1px 3px, rgba(255, 255, 255, 0.4) 0 1px;
    box-shadow: inset rgba(0, 0, 0, 0.4) 0 -5px 12px, inset rgba(0, 0, 0, 1) 0 1px 3px, rgba(255, 255, 255, 0.4) 0 1px;
}

#isexpanded, .expandable {
    display: none;
}

#isexpanded:checked ~ * tr.expandable {
    display: table-row;
    background: #cccccc;
}

#isexpanded:checked ~ p.expandable, #isexpanded:checked ~ * p.expandable {
    display: block;
    background: #cccccc;
}
</style>
</head>
<body>

<input type="checkbox" id="isexpanded" />

<h1>Expandable elements</h1>
<table>
    <thead>
        <tr><th>Column #1</th><th>Column #2</th><th>Column #3</th></tr>
    </thead>
    <tbody>
        <tr class="expandable"><td>[cell text]</td><td>[cell text]</td><td>[cell text]</td></tr>
        <tr><td>[cell text]</td><td>[cell text]</td><td>[cell text]</td></tr>
        <tr><td>[cell text]</td><td>[cell text]</td><td>[cell text]</td></tr>
        <tr class="expandable"><td>[cell text]</td><td>[cell text]</td><td>[cell text]</td></tr>
        <tr class="expandable"><td>[cell text]</td><td>[cell text]</td><td>[cell text]</td></tr>
    </tbody>
</table>

<p>[some sample text]</p>
<p><label for="isexpanded" id="expand-btn">Show hidden elements</label></p>
<p class="expandable">[another sample text]</p>
<p>[some sample text]</p>
</body>
</html>