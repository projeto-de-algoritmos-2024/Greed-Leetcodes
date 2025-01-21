from typing import List

class Solution:
    def candy(self, ratings: List[int]) -> int:
        n = len(ratings)
        # Inicializamos um array com 1 doce para cada criança
        candies = [1] * n
        
        # Primeira passada: da esquerda para a direita
        for i in range(1, n):
            if ratings[i] > ratings[i - 1]:
                candies[i] = candies[i - 1] + 1
        
        # Segunda passada: da direita para a esquerda
        for i in range(n - 2, -1, -1):
            if ratings[i] > ratings[i + 1]:
                candies[i] = max(candies[i], candies[i + 1] + 1)
        
        # O número mínimo total de doces é a soma do array candies
        return sum(candies)
 