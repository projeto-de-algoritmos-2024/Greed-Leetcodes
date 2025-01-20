# [1584. Min Cost to Connect All Points](https://leetcode.com/problems/min-cost-to-connect-all-points/description/?utm_source=chatgpt.com) 

Você recebe uma matriz pointsrepresentando coordenadas inteiras de alguns pontos em um plano 2D, onde. points[i] = [xi, yi]

O custo de conectar dois pontos e é a distância de Manhattan entre eles: , onde denota o valor absoluto de. [xi, yi][xj, yj]|xi - xj| + |yi - yj||val|val

Retorna o custo mínimo para fazer todos os pontos conectados. Todos os pontos são conectados se houver exatamente um caminho simples entre quaisquer dois pontos.



## Example 1:

**Input:**  
`pontos = [[0,0],[2,2],[3,10],[5,2],[7,0]]`

**Output:**  
`20`


**Explanation:**  
`Podemos conectar os pontos como mostrado acima para obter o custo mínimo de 20. Observe que há um caminho único entre cada par de pontos.`



## Example 2:

**Input:**  
`pontos = [[3,12],[-2,5],[-4,1]]`

**Output:**  
`18`



## Constraints:

- `1 <= points.length <= 1000`
- `-10^6 <= xi, yi <= 10^6`
- `Todos os pares são distintos.(xi, yi)`