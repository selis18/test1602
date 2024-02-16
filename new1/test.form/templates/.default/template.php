<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<form method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="title">Название:</label>
      <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
      <label for="category">Категория:</label>
      <select class="form-control" id="category" name="category">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </div>
    <div class="form-group">
      <label>Вид заявки:</label><br>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="urgent" name="types" value="Срочная командировка">
        <label class="form-check-label" for="urgent">Срочная командировка</label><br>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="inTime" name="types" value="Командировка по графику">
        <label class="form-check-label" for="inTime">Командировка по графику</label><br>
      </div>
    </div>
    <div class="form-group">
      <label for="requestComposition">Состав заявки</label>
  	  <div class="form-row">
        <div class="form-group col">
          <label for="expenses">Расходы:</label>
          <input type="text" class="form-control" id="expenses" name="expenses">
        </div>
        <div class="form-group col">
          <label for="amount">Сумма:</label>
          <input type="text" class="form-control" id="amount" name="amount">
        </div>
        <div class="form-group col">
          <label for="purpose">Назначение:</label>
          <input type="text" class="form-control" id="purpose" name="purpose">
        </div>
        <div class="form-group col">
          <label for="notes">Заметки:</label>
          <text class="form-control" id="notes" name="notes"></text>
        </div>
		<div class="form-group col">
			<button type="button" class="btn btn-primary" onclick="addRow()">+</button>
		  <button type="button" class="btn btn-danger" onclick="removeRow(this)">x</button>
    	</div>
      </div>
    </div>
    <div class="form-group">
      <label for="file">Файл:</label>
      <input type="file" class="form-control-file" id="file" name="file">
    </div>
    <div class="form-group">
      <label for="comment">Комментарий:</label>
      <textarea class="form-control" id="comment" name="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>

  </form>
	<script>
    function addRow() {
      let requestComposition = document.getElementById('requestComposition');
      let cloneDiv = requestComposition.cloneNode(true);

      requestComposition.after(cloneDiv);
    }
    
    function removeRow(button) {
      let rowToRemove = button.parentElement.parentElement;
      
      rowToRemove.parentElement.removeChild(rowToRemove);
    }
</script>
</body>

