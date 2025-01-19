from heapq import heappush, heappop
from typing import List

class Solution:
    def scheduleCourse(self, courses: List[List[int]]) -> int:
        # Ordenar os cursos pelo último dia permitido
        courses.sort(key=lambda x: x[1])
        
        total_time = 0
        max_heap = []
        
        for duration, last_day in courses:
            # Adiciona o curso ao heap e incrementa o tempo total
            heappush(max_heap, -duration)
            total_time += duration
            
            # Se o tempo total exceder o último dia permitido
            if total_time > last_day:
                # Remove o curso com maior duração
                total_time += heappop(max_heap)
        
        # O tamanho do heap é o número máximo de cursos que podem ser feitos
        return len(max_heap)
