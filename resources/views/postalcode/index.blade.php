<DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>郵便番号</title>
<meta name="description" content="説明文">
<meta name="keywords">
<link href="/css/layouts.css" rel="stylesheet">
<link href="/css/pages.css" rel="stylesheet">
</head>
<body>
    @livewireScripts
    <livewire:zip-code-auto-fill-form />
    <div>
        <label>郵便番号:
            <input type="text" id="zipcode">
        </label>
    </div>
    <div>
        <label>都道府県:
            <input type="text" class="af_pref">
        </label>
    </div>
    <div>
        <label>市区町村:
            <input type="text" class="af_city">
        </label>
    </div>
    <div>
        <label>その他住所:
            <input type="text" class="af_address">
        </label>
    </div>
</body>
</html>
