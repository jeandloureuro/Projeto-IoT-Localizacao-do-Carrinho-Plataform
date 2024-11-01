# Projeto-IoT-Localizacao-do-Carrinho-Plataforma
![logoJD](https://github.com/user-attachments/assets/e011641c-6f20-4fcd-b0ac-6c3bde74d0a6)

 Desenvolvemos uma solução de localização para rebocadores da John Deere usando triangulação Wi-Fi com ESP32. Através da leitura de sinais de pontos de acesso Wi-Fi, a posição dos veículos é determinada em tempo real, permitindo monitoramento eficiente via interface web, otimização de rotas e aumento da produtividade nas operações da fábrica.
# Desenvolvimento
 # Arquitetura do Sistema
  A arquitetura proposta foi elaborada com base em um sistema IoT, onde o ESP32 atua como o elemento central para coleta e envio dos dados de localização. A comunicação ocorre via rede Wi-Fi, e os dados são processados por um servidor local ou na nuvem.
  ![John Deere](https://github.com/user-attachments/assets/0b59af4f-719c-49e8-a7d9-f9a46e8babba)
 
 # Componentes principais:
  ESP32: Dispositivo principal responsável por coletar os dados de localização do carrinho.
  Servidor de Processamento: Hospeda o sistema de triangulação de sinal Wi-Fi e processa os dados de localização.
  Dashboard (Web App): Interface para visualização em tempo real da posição do carrinho.
# Tecnologias Utilizadas
 ESP32: Controlador Wi-Fi para leitura de dados e envio para o servidor.
 WebSocket: Comunicação em tempo real entre o ESP32 e o servidor.
 HTML/CSS/JS: Interface web para visualização dos dados.
 Draw.io: Ferramenta utilizada para a criação do diagrama da arquitetura.
 GitHub: Controle de versão e portfólio do projeto.
# Funcionamento
 # Pedido de peças feito
 
 ![John Deere (1)](https://github.com/user-attachments/assets/c5f051c7-4f3d-4cf7-b1d4-36632bf4eaf4)
 
 # Carrinho indo entregar as peças 
 
 ![John Deere (2)](https://github.com/user-attachments/assets/30add42b-72e8-488c-9b79-b0d80fad1f3f)
 ![John Deere (3)](https://github.com/user-attachments/assets/e374ab92-9d37-4ecb-ba24-f75a1950e54c)

# Feito a entrega, volta para o estoque

 ![John Deere (5)](https://github.com/user-attachments/assets/3108be6e-ac76-40ab-8597-6cb6873a57ed)
 
 O sistema utiliza triangulação de sinal Wi-Fi, onde o ESP32 coleta o RSSI (Received Signal Strength Indicator) de diferentes roteadores Wi-Fi para estimar a posição do carrinho plataforma. Esses dados são enviados ao servidor, que calcula a posição exata e exibe na dashboard.


