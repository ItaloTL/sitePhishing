document.querySelectorAll('.btn-primary')[2].addEventListener('click', function() {
  const dados = {};
  document.querySelectorAll('input, select, textarea').forEach(function(campo) {
    const chave = campo.id || campo.name;
    if (chave) dados[chave] = campo.value;
  });

  const json = JSON.stringify(dados, null, 2);
  const blob = new Blob([json], { type: 'application/json' });
  const a = document.createElement('a');
  a.href = URL.createObjectURL(blob);
  a.download = 'dados.json';
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
  URL.revokeObjectURL(a.href);
}, true);