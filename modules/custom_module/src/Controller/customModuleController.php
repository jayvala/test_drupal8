<?php

namespace Drupal\custom_module\Controller;

class custom_moduleController {
	public function cache_clear_cron() {
		watchdog('cache_clear', 'going to clear cache');
		drupal_flush_all_caches();
		watchdog('cache_clear','cache cleared');
	}
	cache_clear_cron();
} 