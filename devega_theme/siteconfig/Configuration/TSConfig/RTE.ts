RTE { 
	default { 
		proc {
			HTMLparser_rte {
				# tags die erlaubt/verboten sind
				allowTags < RTE.default.proc.allowTags
				denyTags < RTE.default.proc.denyTags
	
				# tags die untersagt sind
				removeTags = font
	
				# entfernt html-kommentare
				removeComments = 1
	
				# tags die nicht übereinstimmen werden nicht entfernt (protect / 1 / 0)
				keepNonMatchedTags = 0
			}
		}	
	} 
} 
