# ATIVIDADE 4 PHP

> "Projeto foi desenvolvido em WEB durante as aulas do curso técnico, abordando conceitos de PHP."

## 📌 Sobre o Projeto

Este repositório contém um projeto em WEB, focando em conceitos essenciais da linguagem, como:

- Aprendizado do PHP

O projeto visa consolidar o aprendizado e podem ser utilizados como portfólio profissional.

---
## 🛠️ Tecnologias Utilizadas

- vizual code
- Git/GitHub para versionamento

---

## 🚀 Como Executar

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/Ghost-souza006/Atividade4
   ```
2. **Abra o projeto em sua IDE favorita**.
3. **Compile e execute** os arquivos `.web` conforme necessário.
   ```bash
   web atividade4.php
   ```
   ```
---
## 📂 Estrutura do Repositório

```bash
📂 Atividade4
├── exer1.php
├── exer2.php
├── exer3.php
├── exer4.php
├── exer5.php
├── exer6.php
├── exer7.php
├── exer8.php
├── exer9.php
├── exer10.php
├── exer11.php
├── exer12.php
├── exer13.php
├── exer14.php
├── exer15.php
├── index.php
├── style.css
└── 📄 README.md
```
---
## 📖 Exemplos de Código
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor_real = floatval($_POST["valor_real"]);
        $cotacao_usd = 5.21; 
        
        $valor_usd = $valor_real / $cotacao_usd;
        
        $valor_real_formatado = number_format($valor_real, 2, ",", ".");
        $valor_usd_formatado = number_format($valor_usd, 2, ",", ".");
        
        echo "<p>R$ $valor_real_formatado equivalem a US$ $valor_usd_formatado</p>";
    }
    ?>

---
## 🏆 Autor(es)

👤 **Leonardo Schmitt de Souza**  
📧 Email: leo.schmitt2708@gmail.com 
🔗 [GitHub](https://github.com/Ghost-souza006)

---

## 🎯 Objetivo do Repositório

Este repositório serve como um portfólio para demonstrar habilidades em PHP, ajudando na busca de oportunidades de emprego na área de desenvolvimento em um futuro próximo.
---
