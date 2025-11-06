<div class="max-w-3xl mx-auto py-8">
  <h2 class="text-2xl font-bold mb-6 text-center">Website Roadmap</h2>
  <ol class="relative border-l-2 border-gray-300">
    <?php foreach ($phases as $phase): ?>
     <li class="mb-10 ml-6">
       <span class="absolute flex items-center justify-center w-8 h-8 bg-white border-2 <?= 
        $phase['status'] === 'done' ? 'border-green-500' : ($phase['status'] === 'in-progress' ? 'border-yellow-500' : 'border-gray-400') 
       ?> rounded-full -left-4">
        <?php if ($phase['status'] === 'done'): ?>
          <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
          </svg>
        <?php elseif ($phase['status'] === 'in-progress'): ?>
          <svg class="w-5 h-5 text-yellow-500 animate-spin" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-dasharray="4 2"/>
          </svg>
        <?php else: ?>
          <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" stroke="currentColor"/>
          </svg>
        <?php endif; ?>
       </span>
       <div class="bg-white p-4 rounded-lg shadow-sm">
        <h3 class="font-semibold text-lg"><?= esc($phase['title']) ?></h3>
        <p class="text-gray-600 mb-2"><?= esc($phase['description']) ?></p>
        <span class="text-xs text-gray-400"><?= esc($phase['date']) ?></span>
        <?php if ($phase['status'] === 'in-progress'): ?>
          <span class="ml-2 px-2 py-1 text-xs bg-yellow-100 text-yellow-800 rounded">In Progress</span>
        <?php elseif ($phase['status'] === 'planned'): ?>
          <span class="ml-2 px-2 py-1 text-xs bg-gray-100 text-gray-800 rounded">Planned</span>
        <?php elseif ($phase['status'] === 'done'): ?>
          <span class="ml-2 px-2 py-1 text-xs bg-green-100 text-green-800 rounded">Done</span>
        <?php endif; ?>
       </div>
     </li>
    <?php endforeach; ?>
  </ol>
</div>