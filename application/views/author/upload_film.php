<!DOCTYPE html>
<html>
<head>
    <title>Upload Film</title>
</head>
<body>
    <h2>Upload Film</h2>
    <form action="<?= base_url('author/uploadFilm') ?>" method="post" enctype="multipart/form-data">
        <label>Nama Film:</label>
        <input type="text" name="judul"><br>

        <label>Trailer:</label>
        <input type="text" name="trailer"><br>

        <label>Gambar Film:</label>
        <input type="text" name="poster"><br>

        <label>Deskripsi:</label>
        <textarea name="deskripsi"></textarea><br>

        <label for="genre">Genre:</label>
<select name="genre" id="genre">
<option value="" disabled selected>Pilih Genre</option>
    <option value="Action">Action</option>
    <option value="Adventure">Adventure</option>
    <option value="Comedy">Comedy</option>
    <option value="Drama">Drama</option>
    <option value="Horror">Horror</option>
    <option value="Thriller">Thriller</option>
    <option value="Science Fiction">Science Fiction (Sci-Fi)</option>
    <option value="Fantasy">Fantasy</option>
    <option value="Romance">Romance</option>
    <option value="Mystery">Mystery</option>
    <option value="Musical">Musical</option>
    <option value="Documentary">Documentary</option>
    <option value="Animation">Animation</option>
    <option value="Crime">Crime</option>
    <option value="War">War</option>
    <option value="Western">Western</option>
    <option value="Superhero">Superhero</option>
    <option value="Biographical">Biographical (Biopic)</option>
    <option value="Historical">Historical</option>
    <option value="Family">Family</option>
    <option value="Sport">Sport</option>
    <option value="Experimental">Experimental</option>
    <option value="Political">Political</option>
    <option value="Noir">Noir</option>
    <option value="Cyberpunk">Cyberpunk</option>
    <option value="Post-Apocalyptic">Post-Apocalyptic</option>
    <option value="Steampunk">Steampunk</option>
    <option value="Mockumentary">Mockumentary</option>
    <option value="Satire">Satire</option>
    <option value="Psychological">Psychological</option>
</select><br>


        <label>Tahun:</label>
        <input type="number" name="tahun"><br>

        <label for="negara">Negara:</label>
<select name="negara" id="negara">
    <option value="" disabled selected>Pilih Negara</option>
    <option value="Afghanistan">Afghanistan</option>
    <option value="Afrika Selatan">Afrika Selatan</option>
    <option value="Albania">Albania</option>
    <option value="Aljazair">Aljazair</option>
    <option value="Amerika Serikat">Amerika Serikat</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Antigua dan Barbuda">Antigua dan Barbuda</option>
    <option value="Arab Saudi">Arab Saudi</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahama">Bahama</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgia">Belgia</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia dan Herzegovina">Bosnia dan Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="Brasil">Brasil</option>
    <option value="Brunei">Brunei</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Chad">Chad</option>
    <option value="Chili">Chili</option>
    <option value="China">China</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominika">Dominika</option>
    <option value="Ekuador">Ekuador</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Eswatini">Eswatini</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Fiji">Fiji</option>
    <option value="Filipina">Filipina</option>
    <option value="Finlandia">Finlandia</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Ghana">Ghana</option>
    <option value="Grenada">Grenada</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guinea Khatulistiwa">Guinea Khatulistiwa</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Honduras">Honduras</option>
    <option value="Hongaria">Hongaria</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Inggris">Inggris</option>
    <option value="Irak">Irak</option>
    <option value="Iran">Iran</option>
    <option value="Irlandia">Irlandia</option>
    <option value="Islandia">Islandia</option>
    <option value="Israel">Israel</option>
    <option value="Italia">Italia</option>
    <option value="Jamaika">Jamaika</option>
    <option value="Jepang">Jepang</option>
    <option value="Jerman">Jerman</option>
    <option value="Kamboja">Kamboja</option>
    <option value="Kamerun">Kamerun</option>
    <option value="Kanada">Kanada</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kirgistan">Kirgistan</option>
    <option value="Kolombia">Kolombia</option>
    <option value="Korea Selatan">Korea Selatan</option>
    <option value="Korea Utara">Korea Utara</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Laos">Laos</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libya">Libya</option>
    <option value="Lituania">Lituania</option>
    <option value="Luksemburg">Luksemburg</option>
    <option value="Madagaskar">Madagaskar</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Meksiko">Meksiko</option>
    <option value="Mesir">Mesir</option>
    <option value="Monako">Monako</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Mozambik">Mozambik</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nepal">Nepal</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Norwegia">Norwegia</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palestina">Palestina</option>
    <option value="Panama">Panama</option>
    <option value="Perancis">Perancis</option>
    <option value="Peru">Peru</option>
    <option value="Polandia">Polandia</option>
    <option value="Portugal">Portugal</option>
    <option value="Qatar">Qatar</option>
    <option value="Rumania">Rumania</option>
    <option value="Rusia">Rusia</option>
    <option value="Singapura">Singapura</option>
    <option value="Spanyol">Spanyol</option>
    <option value="Sudan">Sudan</option>
    <option value="Swedia">Swedia</option>
    <option value="Swiss">Swiss</option>
    <option value="Thailand">Thailand</option>
    <option value="Turki">Turki</option>
    <option value="Ukraina">Ukraina</option>
    <option value="Uni Emirat Arab">Uni Emirat Arab</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Vietnam</option>
    <option value="Yaman">Yaman</option>
</select><br>

        <label>Rating:</label>
        <input type="text" name="rating"><br>

        <label>Durasi (menit):</label>
        <input type="number" name="durasi"><br>

        <button type="submit">Upload</button>
    </form>
</body>
</html>
