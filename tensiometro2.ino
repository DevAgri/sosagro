//Programa: Monitoracao de planta usando Arduino
//Autor: FILIPEFLOP
 
#define pino_sinal_analogico A0
#define pino_led_vermelho 5
#define pino_led_amarelo 6
#define pino_led_verde 7

int valor_analogico;
int porcentagem;
 
void setup(){
  Serial.begin(9600);
  pinMode(pino_sinal_analogico, INPUT);
  pinMode(pino_led_vermelho, OUTPUT);
  pinMode(pino_led_amarelo, OUTPUT);
  pinMode(pino_led_verde, OUTPUT);
}
 
void loop(){
  valor_analogico = analogRead(pino_sinal_analogico);
  porcentagem = (((-4)* valor_analogico)/27) + (4060/27);
 
  if(valor_analogico < 340){
    Serial.print("\nPorta analogica: ");
    Serial.print("100");
  }

  else if(valor_analogico > 1015){
    Serial.print("\nPorta analogica: ");
    Serial.print("0");
  }

  else{
    Serial.print("\nPorta analogica: ");
    Serial.print(porcentagem);
  }
  
  delay(100);
}

void apagaleds(){
  digitalWrite(pino_led_vermelho, LOW);
  digitalWrite(pino_led_amarelo, LOW);
  digitalWrite(pino_led_verde, LOW);
}
