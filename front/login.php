<fieldset>
    <legend>會員帳號</legend>
    <table>
        <tr>
            <td class="clo">帳號</td>
            <td>
            <input type="text" name="acc" id="acc">
            </td>
        </tr>
        <tr>
            <td class="clo">密碼</td>
            <td>
            <input type="password" name="pw" id="pw">
            </td>
        </tr>
        <tr>
            <td>
                <button >登入</button>
                <button onclick="clean()">清除</button>
            </td>
           
            <td>
                <a href="?do=forget">忘記密碼</a> |
                <a href="?do=reg">尚未註冊</a>
            </td>
        </tr>
    </table>

</fieldset>
<script>
    function clean(){
        $("input[type='text'],input[type='password']").val("");
    }


</script>