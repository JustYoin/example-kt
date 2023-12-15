<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tabela z interaktywnymi</title> 
</head>
<body>
  <table>
    <tr>
      <th>Status</th>
      <th>Element</th>
    </tr>
    <tr>
      <td>Element 1</td>
      <td class="status">&#10006;</td>
    </tr>
    <tr>
      <td>Element 3</td>
      <td class="status">&#10006;</td>
    </tr>
    <tr>
      <td>Element 2</td>
      <td class="status">&#10006;</td>
    </tr>
  </table>
  <script>
    const statuses = document.querySelectorAll('.status');

    statuses.forEach(status => {
      status.addEventListener('click', function() {
        if (this.textContent === '✓') {
          this.textContent = '❌';
          this.classList.remove('checkmark');
          this.classList.add('cross');
        } else {
          this.textContent = '✓';
          this.classList.remove('cross');
          this.classList.add('checkmark');
        }
      });
    });
  </script>
</body>
</html>