<div>
    <h1>수정</h1>
    <form action="modProc" method="post">
        <input type="hidden" name="i_board" value="<?=$this->data->i_board?>">
        <div>제목 : <input type="text" name="title" id="" value="<?=$this->data->title?>"></div>
        <div>내용 : <textarea name="ctnt"><?=$this->data->ctnt?></textarea></div>
        <div>
            <input type="submit"  value="수정">
        </div>
    </form>    
</div>