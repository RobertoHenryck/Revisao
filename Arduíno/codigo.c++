

// ========== 1. Definições iniciais ==========
int ledVermelho = 8;
int ledAmarelo = 7;
int ledVerde = 6;
int botao = 2; // Para etapa 6


bool pedestreSolicitou = false;

// ========== 2. Função setup ==========
void setup() {
  pinMode(ledVermelho, OUTPUT);
  pinMode(ledAmarelo, OUTPUT);
  pinMode(ledVerde, OUTPUT);
  pinMode(botao, INPUT); // Etapa 6
}

// ========== 3. Função loop ==========
void loop() {
 
  if (digitalRead(botao) == HIGH) {
    pedestreSolicitou = true;
  }

  digitalWrite(ledVermelho, HIGH);
  delay(5000);
  digitalWrite(ledVermelho, LOW);

  digitalWrite(ledAmarelo, HIGH);
  delay(2000); 
  digitalWrite(ledAmarelo, LOW);

  digitalWrite(ledVerde, HIGH);
  delay(4000); 

 
  if (pedestreSolicitou) {
    digitalWrite(ledVerde, LOW);
    digitalWrite(ledAmarelo, HIGH);
    delay(2000);
    digitalWrite(ledAmarelo, LOW);
    digitalWrite(ledVermelho, HIGH);
    delay(5000);
    digitalWrite(ledVermelho, LOW);
    pedestreSolicitou = false;
  } else {
    digitalWrite(ledVerde, LOW);
  }

  delay(1000);
  digitalWrite(ledVermelho, LOW);
  digitalWrite(ledAmarelo, LOW);
  digitalWrite(ledVerde, LOW);
  delay(1000); 
}

