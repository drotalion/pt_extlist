####################################################
# This template configures a demolist for use
# with pt_extlist for rendering ExtBase Domain objects
#
# @author Michael Knoll <knoll@punkt.de>
# @Daniel Lienert <lienert@punkt.de>
# @package Typo3
# @subpackage pt_extlist
####################################################

config.tx_extbase {
	persistence {
		enableAutomaticCacheClearing = 1
		updateReferenceIndex = 0
		classes {
			TYPO3\CMS\Extbase\Domain\Model\FrontendUser {
				mapping {
					tableName = fe_users
					recordType =
				}
			}
			TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup {
				mapping {
					tableName = fe_groups
					recordType =
				}
			}
		}
	}
}

#plugin.tx_ptextlist.persistence.storagePid = 12


plugin.tx_ptextlist.settings {

	listConfig.demolist_extbase_02 {

		backendConfig < plugin.tx_ptextlist.prototype.backend.extbase
		backendConfig {

			dataBackendClass = Tx_PtExtlist_Domain_DataBackend_ExtBaseDataBackend_ExtBaseDataBackend
			dataMapperClass = Tx_PtExtlist_Domain_DataBackend_Mapper_DomainObjectMapper
			queryInterpreterClass = Tx_PtExtlist_Domain_DataBackend_ExtBaseDataBackend_ExtBaseInterpreter_ExtBaseInterpreter
			repositoryClassName = TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository

			dataSource {
			}

			tables (
			)

			baseFromClause (
			)

			baseWhereClause (
			)

			baseGroupByClause (
			)
		}

		fields {

			username {
				# use __self__ for referencing the object generated by repository
				table = __self__
				field = username
			}

			usergroup {
				table = __self__
				field = usergroup
			}

			groupuid {
				 table = usergroup
				 field = uid
			}

			grouptitle {
				table = usergroup
				field = title
			}
		}

		columns {

			10 {
				fieldIdentifier = username
				columnIdentifier = username
				label = Username
			}

			20 {
				fieldIdentifier = grouptitle
				columnIdentifier = grouptitle
				label = Gruppen
			}
		}

		filters {
			filterbox1 {
				filterConfigs {
					10 < plugin.tx_ptextlist.prototype.filter.string
					10 {
						partialPath = EXT:pt_extlist/Resources/Private/Partials/Filter/String/StringFilter.html
						filterIdentifier = filter1
						label = Benutzername
						fieldIdentifier = username
					}

					20 < plugin.tx_ptextlist.prototype.filter.select
					20 {
						additionalTables = Tx_Extbase_Domain_Repository_FrontendUserGroupRepository
						filterIdentifier = filter2
						label = Benutzergruppe
						fieldIdentifier = groupuid
						displayFields = grouptitle
						filterField = usergroup
						multiple = 1
						excludeFilters = filterbox1.filter1

						showRowCount = 0
						renderObj = TEXT
						renderObj {
							dataWrap = {field:allDisplayFields}
						}
					}
				}
			}
		}

		pager {
			itemsPerPage = 30
		}
	}
}