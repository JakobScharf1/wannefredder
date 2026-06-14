import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioCreativeThree } from './portfolio-creative-three';

describe('PortfolioCreativeThree', () => {
  let component: PortfolioCreativeThree;
  let fixture: ComponentFixture<PortfolioCreativeThree>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioCreativeThree]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioCreativeThree);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
