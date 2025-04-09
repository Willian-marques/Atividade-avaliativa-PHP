
# 💡 Atividade Avaliativa - PHP

Este projeto é um sistema simples em PHP desenvolvido como parte de uma atividade avaliativa. Ele permite calcular o consumo mensal de energia elétrica de um aparelho, com base em informações fornecidas pelo usuário.

## 🚀 Funcionalidades

- Formulário para cadastro de dados de consumo de um aparelho.
- Cálculo do consumo diário e mensal em KWh.
- Cálculo do valor gasto em reais com base no preço do KWh.
- Classificação do consumo: Baixo, Moderado ou Elevado.

## 📷 Exemplo de uso

1. O usuário acessa a página `index.php` e preenche os dados do aparelho.
2. Após enviar o formulário, é redirecionado para `cadastro.php` onde são exibidos:
   - Os dados fornecidos
   - O consumo calculado
   - A categoria de consumo

## 📁 Estrutura do Projeto

```
📦 atividade-avaliativa-php
├── index.php         # Página de formulário
├── cadastro.php      # Página de resultado e cálculo
├── style.css         # (Opcional) Estilização para as categorias
└── README.md         # Este arquivo
```

## 🛠️ Tecnologias Utilizadas

- PHP
- HTML5
- CSS3 (opcional)

## ▶️ Como Executar Localmente

1. Clone o repositório:
   ```bash
   git clone https://github.com/Willian-marques/Atividade-avaliativa-PHP.git
   ```

2. Coloque os arquivos dentro da pasta do seu servidor local, como `htdocs` (caso esteja usando XAMPP ou similar).

3. Inicie o servidor e acesse no navegador:
   ```
   http://localhost/Atividade-avaliativa-PHP/index.php
   ```

## 📌 Observações

- Todos os campos do formulário são obrigatórios.
- Os valores inseridos devem ser válidos e numéricos.
- O valor do KWh aceita até duas casas decimais.

## 👨‍💻 Autor

Desenvolvido por [Willian Marques](https://github.com/Willian-marques) 🚀
