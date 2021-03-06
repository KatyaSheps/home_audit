<tr valign="top">
	<td colspan="2">Посмотреть траты</td>
</tr>
<tr valign="top">
	<td colspan="2">
		<form>
			С <input type="text" name="date_from"> по <input type="text" name="date_to"> по категории
			<select>
				<option value="0">Все</option>
                <?php foreach ($data['categories'] as $key => $value) { ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <?php } ?>
			</select>
			<input type="submit" value="Смотреть">
		</form>
	</td>
</tr>
<tr>
	<td colspan="2">
		<h2>Сумма трат по категориям за последние 30 дней</h2>
        <?php foreach ($data['spends'] as $key => $value) { ?>
		<p><?= $key ?> — <?php if (is_null($value)) { ?> <i>нет трат</i> <?php } else { ?><b><?= $value; ?> рублей</b><?php } ?></p>
        <?php } ?>
		<hr width="100%">
	</td>
</tr>
<tr>
	<td>
		<h2>Добавить трату</h2>
		<table>
			<tr>
				<td>Дата</td>
				<td><input type="text" name="date"></td>
			</tr>
			<tr>
				<td>Сумма</td>
				<td><input type="text" name="sum"></td>
			</tr>
			<tr>
				<td>Название</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>Категория</td>
				<td>
					<select>
						<?php foreach ($data['categories'] as $key => $value) { ?>
                            <option value="<?= $key ?>"><?= $value ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="Добавить">
				</td>
			</tr>
		</table>
	</td>
</tr>