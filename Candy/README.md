# [135. Candy](https://leetcode.com/problems/candy/description/?envType=problem-list-v2&envId=greedy) 

Há `n` crianças em pé em uma fila. Cada criança recebe um valor de classificação dado na matriz de inteiros `ratings`.

Você está dando doces para essas crianças sujeitas aos seguintes requisitos:

- Cada criança deve ter pelo menos um doce.
- Crianças com classificação mais alta ganham mais doces que seus vizinhos.

Devolva a quantidade mínima de doces que você precisa ter para distribuir os doces para as crianças .

## Example 1:

**Input:**  
`ratings = [1,0,2]`

**Output:**  
`5`


**Explanation:**  
`Você pode alocar para a primeira, segunda e terceira criança 2, 1, 2 doces, respectivamente.`



## Example 2:

**Input:**  
`ratings = [1,2,2]`

**Output:**  
`4`

**Explanation:**  
`Você pode alocar para a primeira, segunda e terceira criança 1, 2, 1 doces, respectivamente. A terceira criança ganha 1 doce porque satisfaz as duas condições acima.`


## Constraints:

- `n == ratings.length`
- `1 <= n <= 2 * 10^4`
- `0 <= ratings[i] <= 2 * 10^4`