<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tasklist</title>
    </head>
    <body>
        <script>
        	/**
        	 * 確認ダイアログの返り値によりフォーム送信
        	*/
        	function DeleteChk () {
        		/* 確認ダイアログ表示 */
        		var flag = confirm ( "削除してもよろしいですか？\n\n削除したくない場合は[キャンセル]ボタンを押して下さい");
        		/* send_flg が TRUEなら送信、FALSEなら送信しない */
        		return flag;
        	}
        </script>
        @include('commons.error_messages')

        @yield('content')
    </body>
</html>